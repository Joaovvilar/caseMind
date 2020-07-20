<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardController extends CI_Controller {
	 public function __construct()
	 {
	 	parent:: __construct();
	 	$this->load->model('dashboardModel');
	 }

	public function index()
	{
		$this->load->model('dashboardModel');	//Carrega o model

		if($_SESSION['acesso'] == 999){								//Se o usuário tiver acesso 999, ele é o admin
			$data['result'] = $this->dashboardModel->pegarDados();
			$this->load->view('dashboardView',$data);		
		}else if($_SESSION['acesso'] == 1){									//Se o acesso for 1, ele é um usuário comum
			$user['row'] = $this->dashboardModel->pegarId($_SESSION['id']);
			$this->load->view('comumView',$user);
		}
	}

	//Edita os dados de um usuário
	public function edit($id){
	$data['row'] = $this->dashboardModel->pegarId($id);
	$this->load->view('editarView',$data);
	}

	//Atualiza os dados do usuário
	public function update($id){
		$this->dashboardModel->atualizarDados($id);
		redirect("index.php/dashboardController");
	}

	//Deleta os dados do usuário
	public function delete($id){
		$this->dashboardModel->deletarDados($id);
		redirect("index.php/dashboardController");
	}
}
