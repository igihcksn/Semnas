<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Pendaftar extends CI_Controller
	{
		
		public function index ()
		{
			//ketika menggunakan base_url harus menggunakan helper
			// $this->load->helper('url'); //untuk banyaknya function maka helper di taruh di autoload
			$this->load->view('admin/layout/header');
			$this->load->view('admin/pendaftar');
			$this->load->view('admin/layout/footer');
		}
	}
 ?>