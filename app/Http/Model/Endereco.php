<?php

// namespace Http\Model;

class Endereco {
	private $id;
	private $rua;
	private $numero;
	private $complemento;
	private $bairro;
	private $CEP;
	private $cidade;
	private $estado;
	private $contato;
	private $paciente_id;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
		return $this;
	}
}
