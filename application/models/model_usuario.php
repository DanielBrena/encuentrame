<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_usuario extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
	}

	/**
	Metodo para saber si existe un usuario.
	@param $usuario Usuario con nombre y clave.
	@return bool Retorna si se encuentra ese usuario.
	*/
	public function acceso($usuario){
		$this->db->where("usu_correo",$usuario["correo"]);
		$this->db->where("usu_contrasena",$usuario["contrasena"]);

		$query = $this->db->get("usuario");
        if($query->num_rows() == 1){
            return true;
        }else{
            return false;
        }

	}

	public function validar_existente($usuario){
		$this->db->where("usu_nombre",$usuario["nombre"]);
		$this->db->or_where("usu_usuario",$usuario["usuario"]);
		$this->db->or_where("usu_correo",$usuario["correo"]);

		$query = $this->db->get("usuario");
        if($query->num_rows() == 1){
            return true;
        }else{
            return false;
        }
	}



}

/* End of file model_usuario.php */
/* Location: ./application/models/model_usuario.php */