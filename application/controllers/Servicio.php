<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {

	private $status;
	private $msg;
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('model_servicio');
		
	}
	
	public function index()
	{
		$this->load->view('view_servicio');
	}

	public function informacion(){
		$this->load->view('view_servicio_informacion');
	}

	public function productos(){
		$this->load->view('view_servicio_producto');
	}

	public function agregar_servicio(){
		$data = $this->input->post();

		$resultado = $this->model_servicio->insert("servicio",$data);
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

	public function eliminar_servicio(){

	}

	public function actualizar_servicio(){

	}

	public function mostrar_servicios(){

	}


}

/* End of file Servicio.php */
/* Location: ./application/controllers/Servicio.php */