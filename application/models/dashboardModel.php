<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardModel extends CI_Model {

	public function __construct()
	{
			$this->load->database();
	}

	public function createData(){
		$data = array (
			'nome' => $this->input->post('nome'),
			'cpf' => $this->input->post('cpf'),
			'email' => $this->input->post('email'),
			'senha' => $this->input->post('senha')
			// aqui eu deveria receber uma imagem tb
		);
		$this->db->insert('users');
	}

	public function pegarDados(){
			$query = $this->db->query('SELECT * FROM users');
			return $query->result();
	}

	public function pegarId($id){
		$query = $this->db->query("SELECT * FROM users WHERE users.id = $id");
		
		return $query->row();
}

	public function atualizarDados($id){
		
		$data = array (
			'nome' => $this->input->post('nome'),
			'cpf' => $this->input->post('cpf'),
			'email' => $this->input->post('email'),
			'acesso' => $this->input->post('acesso'),
			'senha' => $this->input->post('senha')
		);

		$this->db->where('id',$id);
		$this->db->update('users',$data);
	}

	public function deletarDados($id){
		$this->db->where('id',$id);
		$this->db->delete('users');
	}
}
