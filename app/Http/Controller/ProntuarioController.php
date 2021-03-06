<?php

	// namespace Http\Controller;
	require "../../Http/Model/Prontuario.php";

	require "../../Http/Service/ProntuarioService.php";

	require "../../Infrastructure/Database/Connection.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if ($acao == 'inserir') {
		$prontuario = new Prontuario();
		$prontuario->__set('dia', $_POST['dia']);
		$prontuario->__set('procedimentos', $_POST['procedimentos']);
        $prontuario->__set('paciente_id', $_GET['paciente_id']);

		$conexao = new Connection();
		$prontuarioService = new ProntuarioService($conexao, $prontuario);
		$prontuarioService->inserir();

		header('Location: ../../Public/views/lista_pacientes.php');
	}

	if ($acao == 'listar') {
		$prontuario = new Prontuario();
		$conexao = new Connection();
		$prontuarioService = new ProntuarioService($conexao, $prontuario);
		$prontuarios = $prontuarioService->recuperar($_GET['paciente']);
	}
?> 