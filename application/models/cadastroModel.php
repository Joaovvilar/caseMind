<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastroModel extends CI_Model {

	public function salvar(){
        $user = array(
			'nome' => $this->input->post('nome'),
			'cpf' => $this->input->post('cpf'),
			'email' => $this->input->post('email'),
			'senha' => md5($this->input->post('senha'))
		);
        $this->db->insert('users', $user);
    }

    
}
