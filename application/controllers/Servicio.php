<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {

	private $status;
	private $msg;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_servicio');
		$this->load->model('model_crud');
	}
	
	public function index()
	{

		$this->load->view('view_servicio2');
	}

	public function informacion($id = Null){

		
		$data["categorias"] = $this->model_crud->selectAll("categoria_servicio");
		$data["servicio"] = $this->model_crud->selectById("servicio",array("nombre"=>"ser_id","valor" => $id));
		

		$this->load->view('view_servicio_informacion',$data);
	}

	public function productos(){
		$this->load->view('view_servicio_producto');
	}

	public function busqueda(){
		$this->load->view('view_busqueda');
	}

	public function selectById(){
		$data = $this->input->post();
		echo json_encode(
			array(
				"servicio" => $this->model_crud->selectById("servicio",array("nombre" => "ser_id","valor"=>$data["id"])),
				"ubicacion" => $this->model_crud->selectById("servicio_has_ubicacion",array("nombre" => "servicio_ser_id","valor"=>$data["id"]))
				)
			);
	}
	
	public function agregar_servicio(){
		$data = $this->input->post();

		$id_servicio = uniqid();
		$id_informacion = uniqid();

		$data_i = array(
			'inf_id' => $id_informacion,
			'inf_codigo_postal' => $data["codigo_postal"],
			'inf_ciudad' => $data["ciudad"],
			'inf_telefono' => $data["telefono"]
		);

		$r_informacion = $this->model_crud->insert("informacion",$data_i);

		if($r_informacion){

			$data_s = array(
				'ser_id' => $id_servicio,
				'ser_nombre' => $data["nombre"],
				'ser_logo' => "",
				'ser_descripcion' => "",
				'categoria_servicio_cs_id' => $data["categoria"],
				'ser_fecha_creacion' => date("Y-m-d"),
				'usuario_usu_id' => $this->session->userdata('logged_in')["id"],
				'ser_palabras_clave' => "",
				'informacion_inf_id' => $id_informacion
			);

			$r_servicio = $this->model_crud->insert("servicio",$data_s);

			if($r_servicio){
				$this->status = "success";
				$this->msg = "Exito";
			}else{
				$this->model_crud->delete("informacion",$id_informacion);
				$this->status = "error";
				$this->msg = "Error";
			}

		}else{
			$this->status = "error";
			$this->msg = "Error";
		}
		//$resultado = $this->model_crud->insert("servicio",$data);
	

		echo json_encode(
		
			array(
				
				'server' => array(
					'status' => $this->status,
					'msg' => $this->msg
					),
				'app' => array(
					'id' => $id_servicio
				)

			)

		);
	}

	public function update_servicio(){
		$data = $this->input->post();

		echo json_encode(
		
			array(
				
				'server' => array(
					'status' => $this->status,
					'msg' => $this->msg
					),
				'app' => array(
					'id' => $data
				)

			)

		);
 	}

	public function validar_nombre_servicio(){
		$data = $this->input->post();

		$resultado = $this->model_servicio->validar_nombre($data["nombre"]);

		if(!$resultado){
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
					'msg'    => $this->msg)
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