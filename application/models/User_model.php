<?php
class User_model extends CI_model{

  public function register_user($user){
    $this->db->insert('user', $user);
  }

  public function login_user($email,$pass){

    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email',$email);
    $this->db->where('erc20',$pass);

    if($query=$this->db->get()){
        return $query->row_array();
    }
    else{
      return false;
    }
  }

  public function telegram($telegram, $refferal_id) {
    $this->db->set('telegram', $telegram);
    $this->db->where('refferal_id', $refferal_id);
    $this->db->update('user');
  }

  public function twitter($twitter, $refferal_id) {
    $this->db->set('twitter', $twitter);
    $this->db->where('refferal_id', $refferal_id);
    $this->db->update('user');
  }

  public function facebook($facebook, $refferal_id) {
    $this->db->set('facebook', $facebook);
    $this->db->where('refferal_id', $refferal_id);
    $this->db->update('user');
  }

  public function youtube($youtube, $refferal_id) {
    $this->db->set('youtube', $youtube);
    $this->db->where('refferal_id', $refferal_id);
    $this->db->update('user');
  }

  public function email_check($email){

    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email',$email);
    $query=$this->db->get();

    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }
  }

 public function wallet_check($wallet){

   $this->db->select('*');
   $this->db->from('user');
   $this->db->where('erc20',$wallet);
   $query=$this->db->get();

   if($query->num_rows()>0){
     return false;
   }else{
     return true;
   }
 }

}
?>
