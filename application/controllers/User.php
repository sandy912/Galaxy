<?php

class User extends CI_Controller {

public function __construct(){

    parent::__construct();
  	$this->load->helper('url');
  	$this->load->model('user_model');
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->helper('cookie');

}

public function index() {
  $this->load->view("main");
}

function validate_captcha() {
        $recaptcha = trim($this->input->post('g-recaptcha-response'));
        $userIp= $this->input->ip_address();
        $secret='6LfKu1oUAAAAAGWx33GrilXJ29_dWy_49qABj8T3';
        $data = array(
            'secret' => "$secret",
            'response' => "$recaptcha",
            'remoteip' =>"$userIp"
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);
        $status= json_decode($response, true);
        if(empty($status['success'])){
            return FALSE;
        }else{
            return TRUE;
        }
    }

public function register($refferal_id = null){
  // $cookieData = get_cookie("refferal");
  if ($refferal_id != null) {
    $cookie= array(
         'name'   => 'refferal',
         'value'  => $refferal_id,
         'expire' => '604800'
     );
     $this->input->set_cookie($cookie);
     $this->load->view("register");

  }
  else {
     if(!($this->session->userdata('refferal_id'))) {
       $this->load->view('register');
     }
     else {
       redirect('user/profile');
     }
  }

}

public function register_user(){
  $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
  $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');
  if($this->form_validation->run() == FALSE) {
    $this->session->set_flashdata('error_msg', 'Check the Capcha form');
    redirect('user/register');
  }
      $cookieData = get_cookie("refferal");
      if ($cookieData == null) {
        $cookieData = 000;
      }
      $user=array(
        'email'=>$this->input->post('user_email'),
        'erc20'=>$this->input->post('user_erc20'),
        'country'=>$this->input->post('user_country'),
        'reffered_by'=> $cookieData
        );
      //  print_r($user);

      $email_check=$this->user_model->email_check($user['email']);
      $erc20_check=$this->user_model->wallet_check($user['erc20']);

      if($email_check && $erc20_check){
        $this->user_model->register_user($user);

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email',$user['email']);

        if($query=$this->db->get()){
            $value = $query->row_array();
        }
        $this->session->set_userdata('email',$user['email']);
        $this->session->set_userdata('refferal_id', $value['refferal_id']);
        redirect('user/profile');
      }
      else{
        $this->session->set_flashdata('error_msg', 'Email/Wallet Address already exists, Please login');
        redirect('user/register');
      }
}

public function login(){
  if(!($this->session->userdata('refferal_id'))) {
    $this->load->view('login');
  }
  else {
    redirect('user/profile');
  }
}

function login_user(){
  $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
  $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');
  if($this->form_validation->run() == FALSE) {
    $this->load->view("login");
  } else {
  $user_login = array(
  'email'=>$this->input->post('user_email'),
  'erc20'=>$this->input->post('user_erc20')
  );

    $data=$this->user_model->login_user($user_login['email'],$user_login['erc20']);
      if($data)
      {
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('refferal_id',$data['refferal_id']);
        redirect('user/profile');
      }
      else{
        $this->session->set_flashdata('error_msg', 'Email and Wallet Address does not match');
        $this->load->view("login");
      }
    }
}


function profile(){
  $temp = $this->db->where('reffered_by', $this->session->userdata('refferal_id'))->count_all_results('user');
  $this->session->set_userdata('myrefferals',$temp);
  $this->load->view('user_profile');
}

public function user_logout(){
  $this->session->sess_destroy();
  redirect('user/login', 'refresh');
}

}
?>
