<?php

// namespace Http\Model;

class Filiacao {
	private $id;
	private $nome_pai;
	private $nome_mae;
	private $naturalidade_pai;
	private $naturalidade_mae;
	private $paciente_id;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
		return $this;
	}
}
