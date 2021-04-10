<?php

	// namespace Http\Controller;
	require "../../Http/Model/Questionario.php";
	// require "../../Http/Model/Filiacao.php";
	// require "../../Http/Model/Endereco.php";

	require "../../Http/Service/QuestionarioService.php";
	// require "../../Http/Service/FiliacaoService.php";
	// require "../../Http/Service/EnderecoService.php";

	require "../../Infrastructure/Database/Connection.php";

    function checkInput($var) {
        $_POST[$var] = $_POST[$var] == 'Sim' ? $_POST[$var] = 1 : $_POST[$var] = 0;

        return $_POST[$var];
    }

    function defineTrueFalse($vars) {
        foreach($vars as $var) {
            $_POST[$var] = checkInput($var);
        }
    }

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if( $acao == 'inserir') {
		$questionario = new Questionario();
        // define valores 1(true) ou 0(false) para os campos abaixo
        $vars = array(
            "hemorragia",
            "alergia",
            "reumatismo",
            "disturbio_cardiovascular",
            "gastrite",
            "diabetico",
            "desmaio",
            "tratamento",
            "medicamento",
            "doenca_operacao",
            "vicios",
            "ansiedade_depressao",
            "tuberculose",
            "sifilis",
            "hepatite",
            "aids",
            "sarampo",
            "caxumba",
            "varicela",
            "fumante",
        );
        defineTrueFalse($vars);

		$questionario->__set('paciente_id', $_POST['paciente_id']);
		$questionario->__set('queixa', $_POST['queixa']);
		$questionario->__set('historico', $_POST['historico']);
		$questionario->__set('hemorragia', $_POST['hemorragia']);
		$questionario->__set('alergia', $_POST['alergia']);
		$questionario->__set('reumatismo', $_POST['reumatismo']);
		$questionario->__set('disturbio_cardiovascular', $_POST['disturbio_cardiovascular']);
		$questionario->__set('gastrite', $_POST['gastrite']);
		$questionario->__set('diabetico', $_POST['diabetico']);
		$questionario->__set('desmaio', $_POST['desmaio']);
		$questionario->__set('tratamento', $_POST['tratamento']);
		$questionario->__set('medicamento', $_POST['medicamento']);
		$questionario->__set('doenca_operacao', $_POST['doenca_operacao']);
		$questionario->__set('vicios', $_POST['vicios']);
		$questionario->__set('ansiedade_depressao', $_POST['ansiedade_depressao']);
		$questionario->__set('tuberculose', $_POST['tuberculose']);
		$questionario->__set('sifilis', $_POST['sifilis']);
		$questionario->__set('hepatite', $_POST['hepatite']);
		$questionario->__set('aids', $_POST['aids']);
		$questionario->__set('sarampo', $_POST['sarampo']);
		$questionario->__set('caxumba', $_POST['caxumba']);
		$questionario->__set('varicela', $_POST['varicela']);
		$questionario->__set('outros', $_POST['other']);
		$questionario->__set('fumante', $_POST['fumante']);
		$questionario->__set('frequencia', $_POST['frequencia']);

		$conexao = new Connection();
		$questionarioService = new QuestionarioService($conexao, $questionario);

		// Se inserir o Questionario, insere os dados complementares
		if ($questionarioService->inserir()) {
            // exit("inseriu questionario");
			// // Insere filiacao do paciente
			// $filiacao = new Filiacao();
			// $filiacao->__set('nome_mae', $_POST['nome_mae']);
			// $filiacao->__set('nome_pai', $_POST['nome_pai']);
			// $filiacao->__set('nacionalidade_mae', $_POST['nacionalidade_mae']);
			// $filiacao->__set('nacionalidade_pai', $_POST['nacionalidade_pai']);
			// $filiacao->__set('paciente_id', $paciente->__get('id'));

			// $filiacaoService = new FiliacaoService($conexao, $filiacao);
			// $filiacaoService->inserir();

			// // Insere endereco do paciente
			// $endereco = new Endereco();
			// $endereco->__set('rua', $_POST['rua']);
			// $endereco->__set('CEP', $_POST['CEP']);
			// $endereco->__set('numero', $_POST['numero_endereco']);
			// $endereco->__set('complemento', $_POST['complemento']);
			// $endereco->__set('bairro', $_POST['bairro']);
			// $endereco->__set('estado', $_POST['estado_endereco']);
			// $endereco->__set('cidade', $_POST['cidade_endereco']);
			// $endereco->__set('contato', $_POST['contato']);
			// $endereco->__set('paciente_id', $paciente->__get('id'));

			// $enderecoService = new EnderecoService($conexao, $endereco);
			// $enderecoService->inserir();

            header('Location: ../../');
		}

		header('Location: ../../');
	}
?>