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
		$this->load->model('dashboardModel');

		if($_SESSION['acesso'] == 999){
			$data['result'] = $this->dashboardModel->pegarDados();
			$this->load->view('dashboardView',$data);
		}else if($_SESSION['acesso'] == 1){
			$user['row'] = $this->dashboardModel->pegarId($_SESSION['id']);
			$this->load->view('comumView',$user);
		}
	}

	public function edit($id){
	$data['row'] = $this->dashboardModel->pegarId($id);
	$this->load->view('editarView',$data);
	}

	public function update($id){
		$this->dashboardModel->atualizarDados($id);
		redirect("index.php/dashboardController");
	}

	public function delete($id){
		$this->dashboardModel->deletarDados($id);
		redirect("index.php/dashboardController");
	}
}
