<?php

// namespace Http\Model;

class QuestionarioCrianca {
	private $id;
	private $gestacional;
	private $parto;
	private $problemas_parto;
	private $tipo_amamentacao;
	private $idade_amamentacao;
	private $anestesia;
	private $doencao_contagiosa;
	private $vacinada;
	private $questionario_id;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
		return $this;
	}
}
