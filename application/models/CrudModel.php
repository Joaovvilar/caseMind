<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel extends CI_Model {

	public function __construct()
	{
			$this->load->database();
	}

	function createData(){
		$data = array (
			'nome' => $this->input->post('nome'),
			'cpf' => $this->input->post('cpf'),
			'email' => $this->input->post('email'),
			'senha' => $this->input->post('senha')
			// aqui eu deveria receber uma imagem tb
		);
		$this->db->insert('users');
	}
}
