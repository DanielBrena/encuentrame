<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	private $status;
	private $msg;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_crud');
		$this->load->model('model_usuario');
	}

	public function index()
	{
		$this->load->view('view_administrador');
	}

	public function acceso(){
		$data = $this->input->post();
		$resultado = $this->model_usuario($data);
		if($resultado){
			$this->status = "success";
			$this->msg = "Exito";
		}else{
			$this->status = "error";
			$this->msg = "Error";
		}

		echo json_encode(
		
			array(
				
				'server' => array(
					'status' => $this->status,
					'msg' => $this->msg)
				)

		);
	}

	public function registro(){
		$data = $this->input->post();
		//$resultado = $this->model_crud->insert("usuario",$data);
		$resultado = true;
		if($resultado){
			$this->status = "success";
			$this->msg = "Exito";
		}else{
			$this->status = "error";
			$this->msg = "Error";
		}

		echo json_encode(
		
			array(
				
				'server' => array(
					'status' => $this->status,
					'msg' => $this->msg
				),
				'data' => array(
					'data' => $data
				)
			)
				
				

		);

	}



}

/* End of file ControllerUsuario.php */
/* Location: ./application/controllers/ControllerUsuario.php */