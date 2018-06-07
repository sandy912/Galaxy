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

  public function telegram($telegram) {

  }

  public function twitter($twitter) {

  }

  public function facebook($facebook) {

  }

  public function youtube($youtube) {

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
