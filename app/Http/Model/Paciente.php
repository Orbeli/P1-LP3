<?php

// namespace Http\Model;

class Paciente {
	private $id;
	private $nome;
	private $data_nasc;
	private $sexo;
	private $peso;
	private $altura;
	private $cor;
	private $escolaridade;
	private $profissao;
	private $rg;
	private $cpf;
	private $estado_civil;
	private $naturalidade;
	private $estado_nasc;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
		return $this;
	}
}
