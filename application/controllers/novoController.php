<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class novoController extends CI_Controller {

	public function registrar(){
        $user = array(
			"nome" => $this->input->post("nome"),
			"cpf" => $this->input->post("cpf"),
			"email" => $this->input->post("email"),
			"senha" => $this->input->post("senha")
		);
		
		$this->load->model('cadastroModel');
		$this->cadastroModel->salvar($user);
		$this->load->view('loginView');
    }
}