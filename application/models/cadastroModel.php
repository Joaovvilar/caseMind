<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastroModel extends CI_Model {

	//Salva um novo usuário no sistema com acesso '1', comum
	public function salvar(){
        $user = array(
			'nome' => $this->input->post('nome'),
			'cpf' => $this->input->post('cpf'),
			'email' => $this->input->post('email'),
			'acesso'=> 1,
			'senha' => md5($this->input->post('senha'))
		);
        $this->db->insert('users', $user);
    }

    
}
