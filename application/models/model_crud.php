<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_crud extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	/**
	Metodo para insertar en la base de datos.
	@param $table Tabla donde se van a insertar los datos.
	@param $data Datos que van a ser insertados.
	@return int Regresa si se realizo la inserccion.
	*/
	public function insert($table,$data){
		return $this->db->insert($table,$data);
	}

	/**
	Metodo para eliminar datos dentro de la base de datos.
	@param $table Tabla donde se van a insertar los datos.
	@param $id Id con el que se va a identificar que fila eliminar.
	@return int Regresa si se realizo la inserccion.
	*/
	public function delete($table,$id){
		$this->db->where($id["nombre"],$id["valor"]);
		return $this->dv->delete($table);
	}

	/**
	Metodo para actualizar en la base de datos.
	@param $table Tabla donde se van a actualizar los datos.
	@param $data Datos que van a ser actualizados.
	@param $id Id con el que se va a identificar que fila actualizar.
	@return int Regresa las filas afectadas.
	*/
	public function update($table,$data,$id){
		$this->db->where($id["nombre"],$id["valor"]);
		return $this->db->update($table,$data);
	}

	/**
	Metodo que selecciona todos los registros de una tabla.
	@param $table Tabla donde se van a obtener los datos.
	@return Array Regresa los registros de la tabla.
	*/
	public function selectAll($table){
		return $this->db->select->from($table)->get->result();
		
	}

	/**
	Metodo que selecciona todos los registros de una tabla por medio de un Id.
	@param $table Tabla donde se van a obtener los datos.
	@param $id Id con el que se va a identificar que registros obtener.
	@return Array Regresa los registros de la tabla.
	*/
	public function selectById($table,$id){
		return $this->db->select()
		->from($table)
		->where($id["nombre"],$id["valor"])
		->get()->result();
	}

}

/* End of file model_crud.php */
/* Location: ./application/models/model_crud.php */