<?php

// namespace Http\Model;

class Paciente {
	private $id;
	private $nome;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
		return $this;
	}
}
