<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardController extends CI_Controller {
	// public function __construct()
	// {
	// 	parent:: __construct();
	// 	$this->load->model('CrudModel');
	// }

	public function index()
	{
		$this->load->model('dashboardModel');
		$data['result'] = $this->dashboardModel->pegarDados();
		$this->load->view('dashboardView',$data);
	}

    public function edit(){
		$this->load->view('editDashboard',$data);
	}
}
