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

	function setData($model, $keys) {
		foreach ($keys as $key) {
			$model->__set($key, $_POST[$key]);
		}
	}

	if ($acao == 'inserir') {
		$paciente = new Paciente();
		$filiacao = new Filiacao();
		$endereco = new Endereco();
		$conexao = new Connection();

		$keys_paciente = array(
			"nome",
			"data_nasc",
			"sexo",
			"peso",
			"altura",
			"cor",
			"escolaridade",
			"profissao",
			"rg",
			"cpf",
			"estado_civil",
			"naturalidade",
			"estado_nasc"
		);
		$keys_filiacao = array(
			"nome_mae",
			"nome_pai",
			"nacionalidade_mae",
			"nacionalidade_pai"
		);
		$keys_endereco = array(
			"rua",
			"CEP",
			"bairro",
			"estado",
			"complemento",
			"contato"
		);

		setData($paciente, $keys_paciente);
		setData($filiacao, $keys_filiacao);
		setData($endereco, $keys_endereco);
		
		$pacienteService = new PacienteService($conexao, $paciente);
		$pacienteService->inserir();

		$filiacaoService = new FiliacaoService($conexao, $filiacao);
		$enderecoService = new EnderecoService($conexao, $endereco);

		$endereco->__set('numero', $_POST['numero_endereco']);
		$endereco->__set('cidade', $_POST['cidade_endereco']);
		$endereco->__set('paciente_id', $paciente->__get('id'));
		$filiacao->__set('paciente_id', $paciente->__get('id'));

		$filiacaoService->inserir();
		$enderecoService->inserir();

		header('Location: ../../');
	}

	if ($acao == 'atualizar') {
		if(isset($_POST['id'])) {
			$paciente = new Paciente();
			$filiacao = new Filiacao();
			$endereco = new Endereco();
			$conexao = new Connection();

			$keys_paciente = array(
				"id",
				"nome",
				"data_nasc",
				"sexo",
				"peso",
				"altura",
				"cor",
				"escolaridade",
				"profissao",
				"rg",
				"cpf",
				"estado_civil",
				"naturalidade",
				"estado_nasc"
			);
			$keys_filiacao = array(
				"nome_mae",
				"nome_pai",
				"nacionalidade_mae",
				"nacionalidade_pai"
			);
			$keys_endereco = array(
				"rua",
				"CEP",
				"bairro",
				"estado",
				"complemento",
				"contato"
			);

			setData($paciente, $keys_paciente);
			setData($filiacao, $keys_filiacao);
			setData($endereco, $keys_endereco);

			$endereco->__set('numero', $_POST['numero_endereco']);
			$endereco->__set('cidade', $_POST['cidade_endereco']);
			$endereco->__set('paciente_id', $paciente->__get('id'));
			$filiacao->__set('paciente_id', $paciente->__get('id'));
			
			$pacienteService = new PacienteService($conexao, $paciente);
			$filiacaoService = new FiliacaoService($conexao, $filiacao);
			$enderecoService = new EnderecoService($conexao, $endereco);

			$pacienteService->atualizar();
			$filiacaoService->atualizar();
			$enderecoService->atualizar();

			header('Location: ../../Public/views/lista_pacientes.php');
		} else {
			$paciente = new Paciente();
			$conexao = new Connection();
			$pacienteService = new PacienteService($conexao, $paciente);
			$paciente = $pacienteService->getPaciente($_GET['paciente']);
		}
	}

	if ($acao == 'listar') {
		$conexao = new Connection();
		$total = $conexao->dbConnection()->query('SELECT COUNT(*) FROM paciente')->fetchColumn();
		if ($total != 0) {
			$limit = 20;
			$paginas = ceil($total / $limit);

			// Verifica a pagina atual
			$pagina = min($paginas, filter_input(INPUT_GET, 'pagina', FILTER_VALIDATE_INT, array(
				'options' => array(
					'default'   => 1,
					'min_range' => 1,
				),
			)));

			// Faz o calculo do offset
			$offset = ($pagina - 1)  * $limit;

			// Informacoes dos registros
			$inicio = $offset + 1;
			$fim = min(($offset + $limit), $total);

			$paciente = new Paciente();
			$pacienteService = new PacienteService($conexao, $paciente);
			$pacientes = $pacienteService->recuperar($_GET['busca'], $limit, $offset);
		}
	}

	if ($acao == 'recuperar') {
		$paciente = new Paciente();
		$conexao = new Connection();
		$pacienteService = new PacienteService($conexao, $paciente);
		$paciente = $pacienteService->getPaciente($_GET['paciente']);
	}

	if($acao == 'remover') {
		$paciente = new Paciente();
		$conexao = new Connection();
		$pacienteService = new PacienteService($conexao, $paciente);
		$paciente = $pacienteService->removePaciente($_GET['paciente']);
	}
?>