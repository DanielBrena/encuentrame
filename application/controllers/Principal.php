<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$this->load->view('view_principal');
	}

	public function registro(){
		if($this->session->userdata('logged_in')){
			redirect('/usuario','refresh');
			//$this->load->view('view_administrador');
		}else{
			//$this->load->view('login');
			$this->load->view('view_registro');
		}

		
	}

	public function acceder(){
		if($this->session->userdata('logged_in')){
			redirect('/usuario','refresh');
		}else{
			//$this->load->view('login');
			$this->load->view('view_acceder');
		}
	}

}

/* End of file Principal.php */
/* Location: ./application/controllers/Principal.php */