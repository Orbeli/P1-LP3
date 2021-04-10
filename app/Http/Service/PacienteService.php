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
		$query = 'INSERT INTO paciente (nome, data_nasc, sexo, peso, altura, cor, escolaridade, profissao, rg, cpf, estado_civil, naturalidade, estado) VALUES (
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
			:estado
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
		$stmt->bindValue(':estado', $this->paciente->__get('estado'));
		
		if($stmt->execute()) {
			$id = $stmt->fetchColumn();
			$this->paciente->__set('id', $id);

			return TRUE;
		}

		return FALSE;
	}

	public function get_paciente() {
		$query = 'SELECT id FROM paciente WHERE cpf = :cpf';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':cpf', $this->paciente->__get('cpf'));

		// return $stmt->execute();
		$exec = $stmt->execute();
		$result = $stmt->fetchAll();
		$strTable = "paciente";
		echo '<pre>';
		print_r($this->conexao->lastInsertId("$strTable_id_seq"));
		exit;
	}

	// public function recuperar() { //read
	// 	$query = '
	// 		select 
	// 			t.id, s.status, t.tarefa 
	// 		from 	
	// 			tb_tarefas as t left join tb_status as s on (t.id_status = s.id)';
	// 	$stmt = $this->conexao->prepare($query);
	// 	$stmt->execute();
	// 	return $stmt->fetchAll(PDO::FETCH_OBJ);  
	// }

	// public function atualizar() { //update
		
	// 	$query = "update tb_tarefas set tarefa = ? where id = ?";
	// 	$stmt = $this->conexao->prepare($query);
	// 	$stmt->bindValue(1, $this->tarefa->__get('tarefa'));
	// 	$stmt->bindValue(2, $this->tarefa->__get('id'));
	// 	return $stmt->execute();
	// }

	// public function remover() { //delete

	// 	$query = 'delete from tb_tarefas where id = :id';
	// 	$stmt = $this->conexao->prepare($query);
	// 	$stmt->bindValue(':id',$this->tarefa->__get('id'));
	// 	$stmt->execute();
	// }

	// public function marcarRealizada() { 
		
	// 	$query = "update tb_tarefas set id_status = ? where id = ?";
	// 	$stmt = $this->conexao->prepare($query);
	// 	$stmt->bindValue(1, $this->tarefa->__get('id_status'));
	// 	$stmt->bindValue(2, $this->tarefa->__get('id'));
	// 	return $stmt->execute();
	// }

	// public function recuperarTarefasPendentes(){

	// 	$query = '
	// 		select 
	// 			t.id, s.status, t.tarefa 
	// 		from 	
	// 			tb_tarefas as t left join tb_status as s on (t.id_status = s.id)
	// 		where
	// 			t.id_status = :id_status';
				
	// 	$stmt = $this->conexao->prepare($query);
	// 	$stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
	// 	$stmt->execute();
	// 	return $stmt->fetchAll(PDO::FETCH_OBJ);

	// }
}

?>