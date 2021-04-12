<?php

// namespace Http\Service;

//CRUD
class EnderecoService {

	private $conexao;
	private $endereco;

	public function __construct(Connection $conexao, Endereco $endereco) {
		$this->conexao = $conexao->dbConnection();
		$this->endereco = $endereco;
	}

	public function inserir() { //create
		$query = 'INSERT INTO endereco (rua, numero, complemento, bairro, CEP, cidade, estado, contato, paciente_id) VALUES (
			:rua,
			:numero,
			:complemento,
			:bairro,
			:CEP,
			:cidade,
			:estado,
			:contato,
			:paciente_id
		)';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':rua', $this->endereco->__get('rua'));
		$stmt->bindValue(':numero', $this->endereco->__get('numero'));
		$stmt->bindValue(':complemento', $this->endereco->__get('complemento'));
		$stmt->bindValue(':bairro', $this->endereco->__get('bairro'));
		$stmt->bindValue(':CEP', $this->endereco->__get('CEP'));
		$stmt->bindValue(':cidade', $this->endereco->__get('cidade'));
		$stmt->bindValue(':estado', $this->endereco->__get('estado'));
		$stmt->bindValue(':contato', $this->endereco->__get('contato'));
		$stmt->bindValue(':paciente_id', $this->endereco->__get('paciente_id'));
		
		return $stmt->execute();
	}

	public function atualizar() {
		$query = '
			UPDATE endereco
			SET rua=:rua,
				numero=:numero,
				complemento=:complemento,
				bairro=:bairro,
				CEP=:CEP,
				cidade=:cidade,
				estado=:estado,
				contato=:contato
			WHERE paciente_id = :paciente_id
		';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':rua', $this->endereco->__get('rua'));
		$stmt->bindValue(':numero', $this->endereco->__get('numero'));
		$stmt->bindValue(':complemento', $this->endereco->__get('complemento'));
		$stmt->bindValue(':bairro', $this->endereco->__get('bairro'));
		$stmt->bindValue(':CEP', $this->endereco->__get('CEP'));
		$stmt->bindValue(':cidade', $this->endereco->__get('cidade'));
		$stmt->bindValue(':estado', $this->endereco->__get('estado'));
		$stmt->bindValue(':contato', $this->endereco->__get('contato'));
		$stmt->bindValue(':paciente_id', $this->endereco->__get('paciente_id'));

		return $stmt->execute();
	}
}

?>