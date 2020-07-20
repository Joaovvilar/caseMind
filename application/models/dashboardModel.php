<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardModel extends CI_Model {

	public function __construct()
	{
			$this->load->database();
	}

	//Cria e insere as informações ded um usuário no banco de dados
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

	//Pega as informações de todos os usuários e exibe em uma tabela para o admin
	public function pegarDados(){
			$query = $this->db->query('SELECT * FROM users');
			return $query->result();
	}

	//Recupera as informações de um usuário de acordo com seu ID
	public function pegarId($id){
		$query = $this->db->query("SELECT * FROM users WHERE users.id = $id");
		
		return $query->row();
}

	//Atualiza os dados do usuário
	public function atualizarDados($id){
		
		$data = array (
			'nome' => $this->input->post('nome'),
			'cpf' => $this->input->post('cpf'),
			'email' => $this->input->post('email'),
			'acesso' => $this->input->post('acesso'),
			'senha' => md5($this->input->post('senha'))
		);

		$this->db->where('id',$id);
		$this->db->update('users',$data);
	}

	//Deleta por completo um usuário do sistema (função extra que não constava no case)
	public function deletarDados($id){
		$this->db->where('id',$id);
		$this->db->delete('users');
	}

}
