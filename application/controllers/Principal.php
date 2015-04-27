<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$this->load->view('view_principal');
	}

	public function registro(){
		$this->load->view('view_registro');
	}

	public function acceder(){
		$this->load->view('view_acceder');
	}

}

/* End of file Principal.php */
/* Location: ./application/controllers/Principal.php */