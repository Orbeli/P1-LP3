<?php

// namespace Http\Service;

//CRUD
class FiliacaoService {

	private $conexao;
	private $filiacao;

	public function __construct(Connection $conexao, Filiacao $filiacao) {
		$this->conexao = $conexao->dbConnection();
		$this->filiacao = $filiacao;
	}

	public function inserir() { //create
		$query = 'INSERT INTO filiacao (nome_mae, nome_pai, nacionalidade_mae, nacionalidade_pai, paciente_id) VALUES (
			:nome_mae,
			:nome_pai,
			:nacionalidade_mae,
			:nacionalidade_pai,
			:paciente_id
		)';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome_mae', $this->filiacao->__get('nome_mae'));
		$stmt->bindValue(':nome_pai', $this->filiacao->__get('nome_pai'));
		$stmt->bindValue(':nacionalidade_mae', $this->filiacao->__get('nacionalidade_mae'));
		$stmt->bindValue(':nacionalidade_pai', $this->filiacao->__get('nacionalidade_pai'));
		$stmt->bindValue(':paciente_id', $this->filiacao->__get('paciente_id'));
		
		return $stmt->execute();
	}

	// Atualiza um paciente
	public function atualizar() {
		$query = '
			UPDATE filiacao
			SET nome_mae=:nome_mae,
				nome_pai=:nome_pai,
				nacionalidade_mae=:nacionalidade_mae,
				nacionalidade_pai=:nacionalidade_pai
			WHERE paciente_id = :paciente_id
		';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome_mae', $this->filiacao->__get('nome_mae'));
		$stmt->bindValue(':nome_pai', $this->filiacao->__get('nome_pai'));
		$stmt->bindValue(':nacionalidade_mae', $this->filiacao->__get('nacionalidade_mae'));
		$stmt->bindValue(':nacionalidade_pai', $this->filiacao->__get('nacionalidade_pai'));
		$stmt->bindValue(':paciente_id', $this->filiacao->__get('paciente_id'));

		return $stmt->execute();
	}
}

?>