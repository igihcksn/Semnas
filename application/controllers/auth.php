<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

  public function __construct()
{
  parent::__construct();
  $this->load->helper('security');
  $this->load->model('Auth_model');
}

	public function index()
	{

	}
	public function pass()
	{
$this->load->view('admin/pass');
	}


	public function login()
	{

    if (isset($_SESSION['logged_in']) == true) {
        redirect('dashboard');
    }

    $this->form_validation->set_rules('email', 'Email', 'trim|required|callback_CheckEmail',
                        array('required' => '%s harus di isi')
                );
    $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_CheckPassword',
                        array('required' => '%s harus di isi')
                );

    if ($this->form_validation->run() == false){
      $this->load->view('admin/login');
    }else{
       $user = $this->Auth_model->get_admin('email',$this->input->post('email'));

       $_SESSION['nama_admin']    = $user['nama_admin'];
       $_SESSION['nim']    = $user['nim'];
       $_SESSION['logged_in']  = true;
       redirect('dashboard');
    }
	}


  public function logout(){
    $this->session->sess_destroy();
    redirect('');
  }







  //validation
  //bagian cek email
   public function CheckEmail($email)
   {
     if(!$this->Auth_model->get_admin('email',$email)){
       $this->form_validation->set_message('CheckEmail','%s Salah atau tidak terdaftar');
       return false;
     }
     return true;
   }

   //bagian cek password
      public function CheckPassword($password)
      {
          $user = $this->Auth_model->get_admin('email',$this->input->post('email'));
          if (!$this->Auth_model->CheckPassword($user['email'],$password))
          {
            $this->form_validation->set_message('CheckPassword','%s yang anda masukan Salah');
            return false;
          }
          return true;
      }
}
