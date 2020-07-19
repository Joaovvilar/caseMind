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
		$login = $this->input->post('login');
		$senha  = md5($this->input->post('senha'));
		$usuario = $this->loginModel->logarUsuario($login,$senha);
		var_dump($usuario);
		if($usuario){
			echo "entrooou";
			$this->session->set_userdata("usuario_logado", $usuario);
			$this->session->set_flashdata("success", "Logado com sucesso");
			redirect('/index.php/dashboardController/');
		}else{
			echo "noope";
			$this->session->set_flashdata("danger", "Usuário ou senha inválida, tente novamente");
			redirect('/index.php/loginController/');
		}
	}


}
