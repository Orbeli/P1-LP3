<?php

// namespace Http\Service;

//CRUD
class ProntuarioService {

	private $conexao;
	private $prontuario;

	public function __construct(Connection $conexao, Prontuario $prontuario) {
		$this->conexao = $conexao->dbConnection();
		$this->prontuario = $prontuario;
	}

	public function inserir() { //create
		$query = 'INSERT INTO prontuario (dia, procedimentos, paciente_id) VALUES (
			:dia,
			:procedimentos,
			:paciente_id
		)';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':dia', $this->prontuario->__get('dia'));
		$stmt->bindValue(':procedimentos', $this->prontuario->__get('procedimentos'));
		$stmt->bindValue(':paciente_id', $this->prontuario->__get('paciente_id'));
		
		return $stmt->execute();
	}
}

?>