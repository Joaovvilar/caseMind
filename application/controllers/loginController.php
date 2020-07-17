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

	public function autenticar(){
		$this->load->model('loginModel');
		$email = $this->input->post('email');
		$senha  = $this->input->post('senha');
		$usuario = $this->loginModel->logarUsuarios($email,$senha);
		if($usuario){
			$this->session->set_userdata("usuario_logado", $usuario);
			$this->session->set_flashdata("success", "Logado com sucesso");
		}else{
			$this->session->set_flashdata("danger", "Usuário ou senha inválida, tente novamente");
		}
		redirect("loginController");
	}

	// public function create(){
	// 	$this->CrudModel->createData();
	// 	redirect("loginController");
	// }
}
