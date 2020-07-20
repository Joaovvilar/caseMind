<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastroController extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model("cadastroModel");	//carrega a model do cadastro
	}

	public function index()
	{
		$this->load->view('cadastroView'); 	//exibe a página de cadastro
	}

	//Salva o usuário no banco de dados e exibe uma página de sucesso
	public function registrar(){	
		$this->cadastroModel->salvar();
		$this->load->view("sucesso");
        
    }
}
