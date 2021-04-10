<?php

	// namespace Http\Controller;
	require "../../Http/Model/Paciente.php";
	require "../../Http/Service/PacienteService.php";
	require "../../Infrastructure/Database/Connection.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if( $acao == 'inserir') {
		$paciente = new Paciente();
		$paciente->__set('nome', $_POST['nome']);
		
		$conexao = new Connection();
		
		$pacienteService = new PacienteService($conexao, $paciente);
		$pacienteService->inserir();

		header('Location: /Public/views/home.php');
	}
	// } else if($acao == 'recuperar'){

	// 	$tarefa = new Tarefa();
	// 	$conexao = new Conexao();

	// 	$tarefaService = new TarefaService($conexao, $tarefa);
	// 	$tarefas = $tarefaService->recuperar();

	// } else if($acao == 'atualizar'){

	// 	$tarefa = new Tarefa();
	// 	$tarefa->__set('id', $_POST['id'])->__set('tarefa', $_POST['tarefa']);

	// 	$conexao = new Conexao();

	// 	$tarefaService = new tarefaService($conexao, $tarefa);
	// 	if($tarefaService->atualizar()){

	// 		if(isset($_GET['pag']) && $_GET['pag'] == 'index'){
	// 			header('Location: index.php');	
	// 		} else {
	// 			header('Location: todas_tarefas.php');
	// 		}
	// 	}
	
	// } else if($acao == 'remover'){
	// 	$tarefa = new Tarefa();
	// 	$tarefa->__set('id', $_GET['id']);

	// 	$conexao = new Conexao();

	// 	$tarefaService = new TarefaService($conexao, $tarefa);
	// 	$tarefas = $tarefaService->remover();

	// 		if(isset($_GET['pag']) && $_GET['pag'] == 'index'){
	// 			header('Location: index.php');	
	// 		} else {
	// 			header('Location: todas_tarefas.php');
	// 		}
	
	// }else if($acao == 'marcarRealizada'){

	// 	$tarefa = new Tarefa();
	// 	$tarefa->__set('id', $_GET['id'])->__set('id_status', 2);	
		
	// 	$conexao = new Conexao();

	// 	$tarefaService = new TarefaService($conexao, $tarefa);
	// 	$tarefas = $tarefaService->marcarRealizada();

	// 	if(isset($_GET['pag']) && $_GET['pag'] == 'index'){
	// 		header('Location: index.php');	
	// 	} else {
	// 		header('Location: todas_tarefas.php');
	// 	}
	
	// }else if ($acao = 'recuperarTarefasPendentes'){

	// 	$tarefa = new Tarefa();
	// 	$tarefa->__set('id_status',1);
	// 	$conexao = new Conexao();

	// 	$tarefaService = new TarefaService($conexao, $tarefa);
	// 	$tarefas = $tarefaService->recuperarTarefasPendentes();
	// }
?>