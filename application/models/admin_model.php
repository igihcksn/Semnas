<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model {



  //this for get user from database
    public function ambil_admin()
    {
      $this->db->select('*');
      $this->db->from('admin');
      $query = $this->db->get();
      return $result = $query->result();
    }



    public function tambah_admin()
      {
        $data = [
                'nama_admin'      =>$this->input->post('nama'),
                'email'           =>$this->input->post('email'),
                'password'        =>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'nim'             =>$this->input->post('nim'),
        ];
        $this->db->insert('admin', $data);
      }

}
