<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class backend extends CI_Controller {


  public function __construct()
{
  parent::__construct();
  $this->load->model('Auth_model');
  $this->load->model('Admin_model');
}

	public function index()
	{
    if ($_SESSION['logged_in'] == false) {
        redirect('login');
    }
    $this->load->view('admin/layout/header');
		$this->load->view('admin/dashboard');
	}
	public function admin()
	{
    if ($_SESSION['logged_in'] == false) {
        redirect('login');
    }
     $user['admin'] = $this->Admin_model->ambil_admin();
    $this->load->view('admin/layout/header');
		$this->load->view('admin/adminlist',$user);
    $this->load->view('admin/layout/footer');
	}
	public function add_admin()
	{
    if ($_SESSION['logged_in'] == false) {
        redirect('login');
    }

    $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]|is_unique[admin.email]',
                        array('required' => '%s harus di isi',
                              'is_unique'=> '%s sudah terdaftar coba dengan Email yang lain',
                              'max_length'=> '%s Panjang karakter Maximal 10',)
                );
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]',
                        array('required' => '%s harus di isi',
                              'min_length'=> '%s Panjang karakter minimal 6'
                              )
                );
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required',
                        array('required' => '%s harus di isi')
                );
    $this->form_validation->set_rules('nim', 'NIM', 'trim|required|is_unique[admin.nim]|min_length[10]|max_length[10]',
                        array('required' => '%s harus di isi',
                              'min_length'=> '%s Panjang karakter Minimal 10',
                              'max_length'=> '%s Panjang karakter Maximal 10',
                              'is_unique'=> '%s sudah terdaftar coba dengan NIM yang lain',
                      )
                );

    if ($this->form_validation->run() == false){
      $this->load->view('admin/layout/header');
      $this->load->view('admin/addadmin');
      $this->load->view('admin/layout/footer');
    }else{
    $this->Admin_model->tambah_admin();
      redirect('admin');

  }
	}

}
