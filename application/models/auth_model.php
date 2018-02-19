<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth_model extends CI_Model {

  public function is_LoggedIn()
  {
    if (!isset($_SESSION['logged_in'])) {
      return false;
    }
    return true;
  }
  //this for check password correct or not in database
  public function CheckPassword($email,$password)
  {
    $hash = $this->get_admin('email',$email)['password'];
    if (password_verify($password,$hash)) {
      return true;
    }
    return false;
  }
  //this for get user from database
    public function get_admin($key,$val)
    {
      $query = $this->db->get_where('admin',array($key=>$val ));
      if (!empty($query->row_array())) {
        return $query->row_array();
      }
      return false;
    }

}
