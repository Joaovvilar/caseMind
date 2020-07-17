<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastroModel extends CI_Model {

	public function salvar($user){
        $this->db->insert("users", $user);
    }
}
