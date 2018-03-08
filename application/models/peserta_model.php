<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Peserta_model extends CI_Model {



  //this for get user from database
    public function ambil_peserta()
    {
      $this->db->select('*');
      $this->db->from('peserta');
      $query = $this->db->get();
      return $result = $query->result();
    }



    public function tambah_peserta()
      {
        $data = [
                'nama_peserta'            =>$this->input->post('nama'),
                'email_peserta'           =>$this->input->post('email'),
                'telepon_peserta'         =>$this->input->post('telepon'),
                'nim_peserta'             =>$this->input->post('nim'),
                'instansi_peserta'        =>$this->input->post('instansi'),
                'alamat_peserta'             =>$this->input->post('alamat'),
                'pos_peserta'             =>$this->input->post('pos'),
        ];
        $this->db->insert('peserta', $data);
      }

}
