<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_servicio extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function validar_nombre($servicio){
		$this->db->where("ser_nombre",$servicio);

		$query = $this->db->get("servicio");
        if($query->num_rows() == 1){
            return true;
        }else{
            return false;
        }
	}
	

}

/* End of file model_servicio.php */
/* Location: ./application/models/model_servicio.php */