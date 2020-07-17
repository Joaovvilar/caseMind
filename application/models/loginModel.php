<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

	public function __construct()
	{
			$this->load->database();
	}

	logarUsuario($email, $senha){
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("users")->row_array();
        return $usuario;
    }
}
