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
		if($this->session->userdata('logged_in')){
			$this->load->view('view_administrador');
		}else{
			redirect('/','refresh');
		}

		
	}

	public function acceso(){
		

		$data      = $this->input->post();
		$resultado = $this->model_usuario->acceso(
													array(
														'correo' => $data['correo'],
														'contrasena' => $data['contrasena']
														)
													);

		if(!empty($resultado)){
			

			$session_array = array();

			foreach ($resultado as $key) {
				
				$sesion_array = array(
					'id'      => $key->usu_id,
					'nombre'  => $key->usu_nombre,
					'usuario' => $key->usu_usuario,
					'correo'  => $key->usu_correo
				);

				$this->session->set_userdata('logged_in', $sesion_array);
			}

			$this->status = "success";
			$this->msg    = "Exito";

			
		}else{
			$this->status = "error";
			$this->msg    = "Usuario no existente.";

			
			
		}

		echo json_encode(
		
				array(
					'server' => array(
						'status' => $this->status,
						'msg'    => $this->msg
						)
					)

			);
		

		/*if($resultado){
			$this->status = "success";
			$this->msg    = "Exito";
		}else{
			$this->status = "error";
			$this->msg    = "Usuario no existente.";
		}

		echo json_encode(
		
			array(
				'server' => array(
					'status' => $this->status,
					'msg'    => $this->msg
				)
			)

		);*/
	}

	public function logout(){
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('/', 'refresh');
	}

	public function registro(){
		$data_input = $this->input->post();
		
		$data = array(
			'usu_id'             => uniqid(),
			'usu_nombre'         => $data_input['nombre'],
			'usu_usuario'        => $data_input['usuario'],
			'usu_correo'         => $data_input['correo'],
			'usu_contrasena'     => $data_input['contrasena'],
			'usu_fecha_creacion' => date("Y-m-d")
		);

		$validar = $this->model_usuario->validar_existente(
											array(
												'nombre' => $data_input["nombre"],
												'usuario'=> $data_input['usuario'],
												'correo' => $data_input['correo']
												)
											);
		
		if(!$validar){

			try{

				$resultado = $this->model_crud->insert("usuario",$data);
				if($resultado){
					$this->status = "success";
					$this->msg    = "Exito";
				}else{
     
					$this->status = "error";
					$this->msg    = "No se pudo crear su usuario.";
				}

			}catch(Exception $e){
				$this->status = "error";
				$this->msg    = $e->getMessage();
			}
			
		}else{
			$this->status = "error";
			$this->msg    = "Usuario o correo ya existentes.";
		}
		

		echo json_encode(
		
			array(
				
				'server' => array(
					'status' => $this->status,
					'msg'    => $this->msg
				),
				'data' => array(
					'data' => ""
				)
			)
				
				

		);

	}



}

/* End of file ControllerUsuario.php */
/* Location: ./application/controllers/ControllerUsuario.php */