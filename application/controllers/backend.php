<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class backend extends CI_Controller {


  public function __construct()
{
  parent::__construct();
  $this->load->model('Auth_model');
}

	public function index()
	{
    $this->load->view('admin/layout/header');
		$this->load->view('admin/dashboard');
	}
}
