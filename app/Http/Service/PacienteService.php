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
		$query = 'INSERT INTO pacientes (nome) VALUES (?)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->paciente->__get('nome'));
		$stmt->execute();
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