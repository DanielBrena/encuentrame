<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriaServicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_crud');
		
	}

	public function index()
	{
		
	}

	public function getAll(){
		echo json_encode(array("categorias" => $this->model_crud->selectAll("categoria_servicio")));
	}

}
/* End of file CategoriaServicio.php */
/* Location: ./application/controllers/CategoriaServicio.php */