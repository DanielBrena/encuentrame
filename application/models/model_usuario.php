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
		$this->db->where("usu_correo",$usuario["nombre"]);
		$this->db->where("usu_clave",$usuario["clave"]);

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