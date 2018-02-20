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
  public function status_on($email)
  {
    $data = array(
      'status' => 'Online'
    );
    $this->db->where('email',$email);
		$this->db->update('admin',$data);
  }
  public function status_off($email)
  {
    $data = array(
      'status' => 'Offline'
    );
    $this->db->where('email',$email);
		$this->db->update('admin',$data);
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
    public function get_admin_status()
    {
      $this->db->select('*');
      $this->db->from('admin');
      $query = $this->db->get();
      return $result = $query->row_array();;
    }

}
