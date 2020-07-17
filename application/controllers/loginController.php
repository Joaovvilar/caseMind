<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {
	// public function __construct()
	// {
	// 	parent:: __construct();
	// 	$this->load->model('CrudModel');
	// }

	public function index()
	{
		$this->load->view('loginView');
	}

	// public function create(){
	// 	$this->CrudModel->createData();
	// 	redirect("loginController");
	// }
}
