<?php

// namespace Http\Service;

//CRUD
class CondutaCriancaService {

	private $conexao;
	private $condutaCrianca;

	public function __construct(Connection $conexao, CondutaCrianca $condutaCrianca) {
		$this->conexao = $conexao->dbConnection();
		$this->condutaCrianca = $condutaCrianca;
	}

	public function inserir() { //create
		$query = 'INSERT INTO conduta_crianca (sentou, engatinhou, andou, falou, dificuldade_aprendizado, humor, sono, postura_normal, fala_normal, paralisia, enurese, esfincteres, alimentacao, sociabilidade, tique, fobia, ansiedade, medo, birra, ciume, observacoes, alunos, professor, questionario_id) VALUES (
			:sentou,
			:engatinhou,
			:andou,
			:falou,
			:dificuldade_aprendizado,
			:humor,
			:sono,
			:postura_normal,
			:fala_normal,
			:paralisia,
			:enurese,
			:esfincteres,
			:alimentacao,
			:sociabilidade,
			:tique,
			:fobia,
			:ansiedade,
			:medo,
			:birra,
			:ciume,
			:observacoes,
			:alunos,
			:professor,
			:questionario_id
		)';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':sentou', $this->condutaCrianca->__get('sentou'));
		$stmt->bindValue(':engatinhou', $this->condutaCrianca->__get('engatinhou'));
		$stmt->bindValue(':andou', $this->condutaCrianca->__get('andou'));
		$stmt->bindValue(':falou', $this->condutaCrianca->__get('falou'));
		$stmt->bindValue(':dificuldade_aprendizado', $this->condutaCrianca->__get('dificuldade_aprendizado'));
		$stmt->bindValue(':humor', $this->condutaCrianca->__get('humor'));
		$stmt->bindValue(':sono', $this->condutaCrianca->__get('sono'));
		$stmt->bindValue(':postura_normal', $this->condutaCrianca->__get('postura_normal'));
		$stmt->bindValue(':fala_normal', $this->condutaCrianca->__get('fala_normal'));
		$stmt->bindValue(':paralisia', $this->condutaCrianca->__get('paralisia'));
		$stmt->bindValue(':enurese', $this->condutaCrianca->__get('enurese'));
		$stmt->bindValue(':esfincteres', $this->condutaCrianca->__get('esfincteres'));
		$stmt->bindValue(':alimentacao', $this->condutaCrianca->__get('alimentacao'));
		$stmt->bindValue(':sociabilidade', $this->condutaCrianca->__get('sociabilidade'));
		$stmt->bindValue(':tique', $this->condutaCrianca->__get('tique'));
		$stmt->bindValue(':fobia', $this->condutaCrianca->__get('fobia'));
		$stmt->bindValue(':ansiedade', $this->condutaCrianca->__get('ansiedade'));
		$stmt->bindValue(':medo', $this->condutaCrianca->__get('medo'));
		$stmt->bindValue(':birra', $this->condutaCrianca->__get('birra'));
		$stmt->bindValue(':ciume', $this->condutaCrianca->__get('ciume'));
		$stmt->bindValue(':observacoes', $this->condutaCrianca->__get('observacoes'));
		$stmt->bindValue(':alunos', $this->condutaCrianca->__get('alunos'));
		$stmt->bindValue(':professor', $this->condutaCrianca->__get('professor'));
		$stmt->bindValue(':questionario_id', $this->condutaCrianca->__get('questionario_id'));

		return $stmt->execute();
	}
}

?>