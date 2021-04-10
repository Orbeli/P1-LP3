<?php

// namespace Http\Model;

class Questionario {
	private $id;
	private $queixa;
	private $historico;
	private $hemorragia;
	private $alergia;
	private $reumatismo;
	private $disturbio_cardiovascular;
	private $gastrite;
	private $diabetico;
	private $desmaio;
	private $tratamento;
	private $medicamento;
	private $doenca_operacao;
	private $vicios;
	private $ansiedade_depressao;
	private $tuberculose;
	private $sifilis;
	private $hepatite;
	private $aids;
	private $sarampo;
	private $caxumba;
	private $varicela;
	private $fumante;
	private $frequencia;
	private $paciente_id;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
		return $this;
	}
}
