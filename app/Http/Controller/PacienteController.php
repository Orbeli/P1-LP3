<?php

	// namespace Http\Controller;
	require "../../Http/Model/Paciente.php";
	require "../../Http/Model/Filiacao.php";
	require "../../Http/Model/Endereco.php";

	require "../../Http/Service/PacienteService.php";
	require "../../Http/Service/FiliacaoService.php";
	require "../../Http/Service/EnderecoService.php";

	require "../../Infrastructure/Database/Connection.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if( $acao == 'inserir') {
		$paciente = new Paciente();
		$paciente->__set('nome', $_POST['nome']);
		$paciente->__set('data_nasc', $_POST['data_nasc']);
		$paciente->__set('sexo', $_POST['sexo']);
		$paciente->__set('peso', $_POST['peso']);
		$paciente->__set('altura', $_POST['altura']);
		$paciente->__set('cor', $_POST['cor']);
		$paciente->__set('escolaridade', $_POST['escolaridade']);
		$paciente->__set('profissao', $_POST['profissao']);
		$paciente->__set('rg', $_POST['rg']);
		$paciente->__set('cpf', $_POST['cpf']);
		$paciente->__set('estado_civil', $_POST['estado_civil']);
		$paciente->__set('naturalidade', $_POST['naturalidade']);
		$paciente->__set('estado', $_POST['estado']);

		$conexao = new Connection();
		$pacienteService = new PacienteService($conexao, $paciente);

		// Se inserir o paciente, insere os dados complementares
		if ($pacienteService->inserir()) {
			// Insere filiacao do paciente
			$filiacao = new Filiacao();
			$filiacao->__set('nome_mae', $_POST['nome_mae']);
			$filiacao->__set('nome_pai', $_POST['nome_pai']);
			$filiacao->__set('nacionalidade_mae', $_POST['nacionalidade_mae']);
			$filiacao->__set('nacionalidade_pai', $_POST['nacionalidade_pai']);
			$filiacao->__set('paciente_id', $paciente->__get('id'));

			$filiacaoService = new FiliacaoService($conexao, $filiacao);
			$filiacaoService->inserir();

			// Insere endereco do paciente
			$endereco = new Endereco();
			$endereco->__set('rua', $_POST['rua']);
			$endereco->__set('CEP', $_POST['CEP']);
			$endereco->__set('numero', $_POST['numero_endereco']);
			$endereco->__set('complemento', $_POST['complemento']);
			$endereco->__set('bairro', $_POST['bairro']);
			$endereco->__set('estado', $_POST['estado_endereco']);
			$endereco->__set('cidade', $_POST['cidade_endereco']);
			$endereco->__set('contato', $_POST['contato']);
			$endereco->__set('paciente_id', $paciente->__get('id'));

			$enderecoService = new EnderecoService($conexao, $endereco);
			$enderecoService->inserir();
		}

		header('Location: ../../');
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