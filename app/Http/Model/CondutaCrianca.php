<?php

// namespace Http\Model;

class CondutaCrianca {
	private $id;
	private $sentou;
	private $engatinhou;
	private $andou;
	private $falou;
	private $dificuldade_aprendizado;
	private $humor;
	private $sono;
	private $postura_normal;
	private $fala_normal;
	private $paralisia;
	private $enurese;
	private $esfincteres;
	private $alimentacao;
	private $sociabilidade;
	private $tique;
	private $fobia;
	private $ansiedade;
	private $medo;
	private $birra;
	private $ciume;
	private $observacoes;
	private $alunos;
	private $professor;
	private $questionario_id;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
		return $this;
	}
}
