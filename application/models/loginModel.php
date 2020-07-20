<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

	public function __construct()
	{
			$this->load->database();
	}

    //Verifica se existe um usuário com os dados informados e retorna 
	public function logarUsuario($login, $senha){
        $this->db->where("email", $login);
        $this->db->or_where("cpf",$login);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("users")->row_array();
        return $usuario;
    }

 
}
