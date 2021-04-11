<?php

// namespace Http\Model;

class Prontuario {
	private $id;
	private $dia;
	private $procedimentos;
	private $paciente_id;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
		return $this;
	}
}
