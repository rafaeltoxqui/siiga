<?php

class Layout{

	private $id_layout;
	private $id_usuario;
	private $fecha;
	private $hora;
	private $id_tipo_layout; 

	public function __construct(){

	}

	public function getIdLayout(){
		return $this->id_layout;
	}

	public function setIdLayout($id_layout){
		$this->id_layout = $id_layout;
	}

	public function getIdUsuario(){
		return $this->id_usuario;
	}

	public function setIdUsuario($id_usuario){
		$this->id_layout = $id_usuario;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->id_layout = $fecha;
	}	

	public function getHora(){
		return $this->hora;
	}

	public function setHora($hora){
		$this->id_layout = $hora;
	}

	public function getIdTipoLayout(){
		return $this->id_tipo_layout;
	}

	public function setIdTipoLayout($id_tipo_layout){
		$this->id_layout = $id_tipo_layout;
	}
}

?>