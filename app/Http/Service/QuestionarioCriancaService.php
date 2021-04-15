<?php

// namespace Http\Service;

//CRUD
class QuestionarioCriancaService {

	private $conexao;
	private $questionarioCrianca;

	public function __construct(Connection $conexao, QuestionarioCrianca $questionarioCrianca) {
		$this->conexao = $conexao->dbConnection();
		$this->questionarioCrianca = $questionarioCrianca;
	}

	public function inserir() { //create
		$query = 'INSERT INTO questionario_infantil (gestacional, parto, problemas_parto, tipo_amamentacao, idade_amamentacao, anestesia, doencao_contagiosa, vacinada, questionario_id) VALUES (
			:gestacional,
			:parto,
			:problemas_parto,
			:tipo_amamentacao,
			:idade_amamentacao,
			:anestesia,
			:doencao_contagiosa,
			:vacinada,
			:questionario_id
		)';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':gestacional', $this->questionarioCrianca->__get('gestacional'));
		$stmt->bindValue(':parto', $this->questionarioCrianca->__get('parto'));
		$stmt->bindValue(':problemas_parto', $this->questionarioCrianca->__get('problemas_parto'));
		$stmt->bindValue(':tipo_amamentacao', $this->questionarioCrianca->__get('tipo_amamentacao'));
		$stmt->bindValue(':idade_amamentacao', $this->questionarioCrianca->__get('idade_amamentacao'));
		$stmt->bindValue(':anestesia', $this->questionarioCrianca->__get('anestesia'));
		$stmt->bindValue(':doencao_contagiosa', $this->questionarioCrianca->__get('doencao_contagiosa'));
		$stmt->bindValue(':vacinada', $this->questionarioCrianca->__get('vacinada'));
		$stmt->bindValue(':questionario_id', $this->questionarioCrianca->__get('questionario_id'));
		
		return $stmt->execute();
	}

	public function atualizar() { //create
		$query = '
			UPDATE questionario_infantil
			SET	gestacional=:gestacional,
				parto=:parto,
				problemas_parto=:problemas_parto,
				tipo_amamentacao=:tipo_amamentacao,
				idade_amamentacao=:idade_amamentacao,
				anestesia=:anestesia,
				doencao_contagiosa=:doencao_contagiosa,
				vacinada=:vacinada
			WHERE questionario_id = :questionario_id
		';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':gestacional', $this->questionarioCrianca->__get('gestacional'));
		$stmt->bindValue(':parto', $this->questionarioCrianca->__get('parto'));
		$stmt->bindValue(':problemas_parto', $this->questionarioCrianca->__get('problemas_parto'));
		$stmt->bindValue(':tipo_amamentacao', $this->questionarioCrianca->__get('tipo_amamentacao'));
		$stmt->bindValue(':idade_amamentacao', $this->questionarioCrianca->__get('idade_amamentacao'));
		$stmt->bindValue(':anestesia', $this->questionarioCrianca->__get('anestesia'));
		$stmt->bindValue(':doencao_contagiosa', $this->questionarioCrianca->__get('doencao_contagiosa'));
		$stmt->bindValue(':vacinada', $this->questionarioCrianca->__get('vacinada'));
		$stmt->bindValue(':questionario_id', $this->questionarioCrianca->__get('questionario_id'));

		return $stmt->execute();
	}

}

?>