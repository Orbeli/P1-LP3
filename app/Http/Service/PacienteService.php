<?php

// namespace Http\Service;

//CRUD
class PacienteService {

	private $conexao;
	private $paciente;

	public function __construct(Connection $conexao, Paciente $paciente) {
		$this->conexao = $conexao->dbConnection();
		$this->paciente = $paciente;
	}

	public function inserir() { //create
		$query = 'INSERT INTO paciente (nome, data_nasc, sexo, peso, altura, cor, escolaridade, profissao, rg, cpf, estado_civil, naturalidade, estado_nasc) VALUES (
			:nome,
			:data_nasc,
			:sexo,
			:peso,
			:altura,
			:cor,
			:escolaridade,
			:profissao,
			:rg,
			:cpf,
			:estado_civil,
			:naturalidade,
			:estado_nasc
		) RETURNING id';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->paciente->__get('nome'));
		$stmt->bindValue(':data_nasc', $this->paciente->__get('data_nasc'));
		$stmt->bindValue(':sexo', $this->paciente->__get('sexo'));
		$stmt->bindValue(':peso', $this->paciente->__get('peso'));
		$stmt->bindValue(':altura', $this->paciente->__get('altura'));
		$stmt->bindValue(':cor', $this->paciente->__get('cor'));
		$stmt->bindValue(':escolaridade', $this->paciente->__get('escolaridade'));
		$stmt->bindValue(':profissao', $this->paciente->__get('profissao'));
		$stmt->bindValue(':rg', $this->paciente->__get('rg'));
		$stmt->bindValue(':cpf', $this->paciente->__get('cpf'));
		$stmt->bindValue(':estado_civil', $this->paciente->__get('estado_civil'));
		$stmt->bindValue(':naturalidade', $this->paciente->__get('naturalidade'));
		$stmt->bindValue(':estado_nasc', $this->paciente->__get('estado_nasc'));
		
		if($stmt->execute()) {
			$id = $stmt->fetchColumn();
			$this->paciente->__set('id', $id);

			return True;
		}

		return False;
	}

	// Lista todos os pacientes
	public function recuperar($busca = "") { //read
		$busca = $this->clean($busca);

		if ($busca == "") {
			$query = "SELECT id, nome, cpf, data_nasc FROM paciente ORDER BY id ASC";
			$stmt = $this->conexao->prepare($query);
		} else {
			$query = "
				SELECT id, nome, cpf, data_nasc
				FROM paciente
				WHERE LOWER(nome) LIKE :busca OR cpf LIKE :busca
				ORDER BY id ASC
			";
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':busca', "%".$busca."%");
			$stmt->bindValue(':busca', "%".$busca."%");
		}
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_OBJ);  
	}

	// Retorna um objeto paciente pelo id
	public function getPaciente($id) {
		$query = '
			SELECT * FROM paciente 
			INNER JOIN filiacao ON 
				paciente.id = filiacao.paciente_id
			INNER JOIN endereco ON 
				paciente.id = endereco.paciente_id
			WHERE paciente.id = :id
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $id);
		$stmt->execute();

		// Se encontrou o usuário
		if($stmt->rowCount() > 0) {
			return $stmt->fetch(PDO::FETCH_OBJ);
		}

		header('Location: ../../Public/views/lista_pacientes.php');
	}

	// Remove um paciente
	public function removePaciente($id) {
		$query = 'DELETE FROM paciente where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $id);
		$stmt->execute();

		header('Location: ../../Public/views/lista_pacientes.php');
	}

	// Atualiza um paciente
	public function atualizar() {
		$query = '
			UPDATE paciente
			SET nome=:nome,
				data_nasc=:data_nasc,
				sexo=:sexo,
				peso=:peso,
				altura=:altura,
				cor=:cor,
				escolaridade=:escolaridade,
				profissao=:profissao,
				rg=:rg,
				cpf=:cpf,
				estado_civil=:estado_civil,
				naturalidade=:naturalidade,
				estado_nasc=:estado_nasc
			WHERE id = :id
		';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->paciente->__get('id'));
		$stmt->bindValue(':nome', $this->paciente->__get('nome'));
		$stmt->bindValue(':data_nasc', $this->paciente->__get('data_nasc'));
		$stmt->bindValue(':sexo', $this->paciente->__get('sexo'));
		$stmt->bindValue(':peso', $this->paciente->__get('peso'));
		$stmt->bindValue(':altura', $this->paciente->__get('altura'));
		$stmt->bindValue(':cor', $this->paciente->__get('cor'));
		$stmt->bindValue(':escolaridade', $this->paciente->__get('escolaridade'));
		$stmt->bindValue(':profissao', $this->paciente->__get('profissao'));
		$stmt->bindValue(':rg', $this->paciente->__get('rg'));
		$stmt->bindValue(':cpf', $this->paciente->__get('cpf'));
		$stmt->bindValue(':estado_civil', $this->paciente->__get('estado_civil'));
		$stmt->bindValue(':naturalidade', $this->paciente->__get('naturalidade'));
		$stmt->bindValue(':estado_nasc', $this->paciente->__get('estado_nasc'));

		return $stmt->execute();
	}

	public function clean($string) {
		$string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
		
		return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
	}
}

?>