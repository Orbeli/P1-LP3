<?php

// namespace Http\Service;

//CRUD
class ExameFisicoService {

	private $conexao;
	private $exameFisico;

	public function __construct(Connection $conexao, ExameFisico $exameFisico) {
		$this->conexao = $conexao->dbConnection();
		$this->exameFisico = $exameFisico;
	}

	public function inserir() { //create
		$query = 'INSERT INTO exame_fisico (labio, mucosa, lingua, soalho, palato_duro, garganta, palato_mole, alveolar, gengiva, salivar, linfonodos, atm, mastigadores, oclusao, alteracoes, pamax, pamin, presuntivo, complementares, definitivo, proservacao, tratamento, alunos_exame, professor_exame, questionario_id) VALUES (
			:labio,
			:mucosa,
			:lingua,
			:soalho,
			:palato_duro,
			:garganta,
			:palato_mole,
			:alveolar,
			:gengiva,
			:salivar,
			:linfonodos,
			:atm,
			:mastigadores,
			:oclusao,
			:alteracoes,
			:pamax,
			:pamin,
			:presuntivo,
			:complementares,
			:definitivo,
			:proservacao,
			:tratamento,
            :alunos_exame,
			:professor_exame,
			:questionario_id
		)';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':labio', $this->exameFisico->__get('labio'));
		$stmt->bindValue(':mucosa', $this->exameFisico->__get('mucosa'));
		$stmt->bindValue(':lingua', $this->exameFisico->__get('lingua'));
		$stmt->bindValue(':soalho', $this->exameFisico->__get('soalho'));
		$stmt->bindValue(':palato_duro', $this->exameFisico->__get('palato_duro'));
		$stmt->bindValue(':garganta', $this->exameFisico->__get('garganta'));
		$stmt->bindValue(':palato_mole', $this->exameFisico->__get('palato_mole'));
		$stmt->bindValue(':alveolar', $this->exameFisico->__get('alveolar'));
		$stmt->bindValue(':gengiva', $this->exameFisico->__get('gengiva'));
		$stmt->bindValue(':salivar', $this->exameFisico->__get('salivar'));
		$stmt->bindValue(':linfonodos', $this->exameFisico->__get('linfonodos'));
		$stmt->bindValue(':atm', $this->exameFisico->__get('atm'));
		$stmt->bindValue(':mastigadores', $this->exameFisico->__get('mastigadores'));
		$stmt->bindValue(':oclusao', $this->exameFisico->__get('oclusao'));
		$stmt->bindValue(':alteracoes', $this->exameFisico->__get('alteracoes'));
		$stmt->bindValue(':pamax', $this->exameFisico->__get('pamax'));
		$stmt->bindValue(':pamin', $this->exameFisico->__get('pamin'));
		$stmt->bindValue(':presuntivo', $this->exameFisico->__get('presuntivo'));
		$stmt->bindValue(':complementares', $this->exameFisico->__get('complementares'));
		$stmt->bindValue(':definitivo', $this->exameFisico->__get('definitivo'));
		$stmt->bindValue(':proservacao', $this->exameFisico->__get('proservacao'));
		$stmt->bindValue(':tratamento', $this->exameFisico->__get('tratamento'));
		$stmt->bindValue(':alunos_exame', $this->exameFisico->__get('alunos_exame'));
		$stmt->bindValue(':professor_exame', $this->exameFisico->__get('professor_exame'));
		$stmt->bindValue(':questionario_id', $this->exameFisico->__get('questionario_id'));

		return $stmt->execute();
	}
}

?>