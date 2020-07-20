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

	//Autenticação do usuário que tenta entrar no site
	public function autenticar(){
		$this->load->model('loginModel');
		$login = $this->input->post('login');
		$senha  = md5($this->input->post('senha'));
		$usuario = $this->loginModel->logarUsuario($login,$senha);	//$usuario sera o resultado da busca por seu login e senha
		if($usuario){											//Se existir esse objeto usuario (ou seja, existem os dados no bd)
			$_SESSION["acesso"] = $usuario['acesso'];	//São declarados globalmente o acesso e id deste usuário corrente
			$_SESSION["id"] = $usuario['id'];


			if($_SESSION['acesso'] == 1){									//Caso usuário comum
				$this->session->set_userdata("usuario_logado", $usuario);
				$this->session->set_flashdata("success", "Logado com sucesso");
				redirect('/index.php/dashboardController/');
			}else if($_SESSION['acesso'] == 999){								//Caso usuário admin
				$this->session->set_userdata("usuario_logado", $usuario);
				$this->session->set_flashdata("success", "Logado com sucesso");
				redirect('/index.php/dashboardController/');
			}else{
				echo "Acesso Negado";
			}
		}else{																//Caso não esteja registrado, ou tenha permissão 0, é retornado para a tela de login
			$this->session->set_flashdata("danger", "Usuário ou senha inválida, tente novamente");
			redirect('/index.php/loginController/');
		}
	}


}
