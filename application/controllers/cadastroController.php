<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastroController extends CI_Controller {
	public function index()
	{
		$this->load->view('cadastroView');
	}
}
