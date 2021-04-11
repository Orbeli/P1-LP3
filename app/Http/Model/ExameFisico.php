<?php

// namespace Http\Model;

class ExameFisico {
	private $id;
	private $labio;
	private $mucosa;
	private $lingua;
	private $soalho;
	private $palato_duro;
	private $garganta;
	private $palato_mole;
	private $alveolar;
	private $gengiva;
	private $salivar;
	private $linfonodos;
	private $atm;
	private $mastigadores;
	private $oclusao;
	private $alteracoes;
	private $pamax;
	private $pamin;
	private $presuntivo;
	private $complementares;
	private $definitivo;
	private $proservacao;
	private $plano;
	private $alunos_exame;
	private $professor_exame;
	private $questionario_id;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
		return $this;
	}
}
