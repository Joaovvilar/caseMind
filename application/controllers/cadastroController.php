<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastroController extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model("cadastroModel");
	}

	public function index()
	{
		$this->load->view('cadastroView');
	}

	public function registrar(){
		$this->cadastroModel->salvar();
		redirect("cadastroController");
        
		// var_dump($user);
		// $this->load->model('cadastroModel');
		// $this->cadastroModel->salvar($user);
		// $this->load->view('loginView');
    }
}
