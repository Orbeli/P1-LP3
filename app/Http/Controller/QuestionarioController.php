<?php

	// namespace Http\Controller;
	require "../../Http/Model/Questionario.php";
	require "../../Http/Model/QuestionarioCrianca.php";
	require "../../Http/Model/CondutaCrianca.php";
	require "../../Http/Model/ExameFisico.php";

	require "../../Http/Service/QuestionarioService.php";
	require "../../Http/Service/QuestionarioCriancaService.php";
	require "../../Http/Service/CondutaCriancaService.php";
	require "../../Http/Service/ExameFisicoService.php";

	require "../../Infrastructure/Database/Connection.php";

    function checkInput($var) {
		if($_POST[$var] == 'Sim') {
			$_POST[$var] = 1;
		} else {
			$_POST[$var] = 0;
		}

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
		$questionario->__set('outros', $_POST['outros']);
		$questionario->__set('fumante', $_POST['fumante']);
		$questionario->__set('frequencia', $_POST['frequencia']);

		$conexao = new Connection();
		$questionarioService = new QuestionarioService($conexao, $questionario);

		// Se inserir o Questionario, insere os dados complementares
		if ($questionarioService->inserir()) {
			// Insere o questionario infantil
			$vars = array(
				'problemas_parto',
				'anestesia',
				'doencao_contagiosa',
				'vacinada',
			);
			defineTrueFalse($vars);

			// Insere questionario da crianca
			$questionarioCrianca = new QuestionarioCrianca();
			$questionarioCrianca->__set('gestacional', $_POST['gestacional']);
			$questionarioCrianca->__set('parto', $_POST['parto']);
			$questionarioCrianca->__set('problemas_parto', $_POST['problemas_parto']);
			$questionarioCrianca->__set('tipo_amamentacao', $_POST['tipo_amamentacao']);
			$questionarioCrianca->__set('idade_amamentacao', $_POST['idade_amamentacao']);
			$questionarioCrianca->__set('anestesia', $_POST['anestesia']);
			$questionarioCrianca->__set('doencao_contagiosa', $_POST['doencao_contagiosa']);
			$questionarioCrianca->__set('vacinada', $_POST['vacinada']);
			$questionarioCrianca->__set('questionario_id', $questionario->__get('id'));

			$questionarioCriancaService = new QuestionarioCriancaService($conexao, $questionarioCrianca);
			$questionarioCriancaService->inserir();

			$vars = array(
				'sentou',
				'engatinhou',
				'andou',
				'falou',
				'dificuldade_aprendizado',
				'postura_normal',
				'fala_normal',
				'paralisia',
				'enurese',
				'esfincteres',
				'tique',
				'fobia',
				'ansiedade',
				'medo',
				'birra',
				'ciume',
			);
			defineTrueFalse($vars);

			// Insere conduta da crianca
			$condutaCrianca = new CondutaCrianca();
			$condutaCrianca->__set('sentou', $_POST['sentou']);
			$condutaCrianca->__set('engatinhou', $_POST['engatinhou']);
			$condutaCrianca->__set('andou', $_POST['andou']);
			$condutaCrianca->__set('falou', $_POST['falou']);
			$condutaCrianca->__set('dificuldade_aprendizado', $_POST['dificuldade_aprendizado']);
			$condutaCrianca->__set('humor', $_POST['humor']);
			$condutaCrianca->__set('sono', $_POST['sono']);
			$condutaCrianca->__set('postura_normal', $_POST['postura_normal']);
			$condutaCrianca->__set('fala_normal', $_POST['fala_normal']);
			$condutaCrianca->__set('paralisia', $_POST['paralisia']);
			$condutaCrianca->__set('enurese', $_POST['enurese']);
			$condutaCrianca->__set('esfincteres', $_POST['esfincteres']);
			$condutaCrianca->__set('alimentacao', $_POST['alimentacao']);
			$condutaCrianca->__set('sociabilidade', $_POST['sociabilidade']);
			$condutaCrianca->__set('tique', $_POST['tique']);
			$condutaCrianca->__set('fobia', $_POST['fobia']);
			$condutaCrianca->__set('ansiedade', $_POST['ansiedade']);
			$condutaCrianca->__set('medo', $_POST['medo']);
			$condutaCrianca->__set('birra', $_POST['birra']);
			$condutaCrianca->__set('ciume', $_POST['ciume']);
			$condutaCrianca->__set('observacoes', $_POST['observacoes']);
			$condutaCrianca->__set('alunos', $_POST['alunos']);
			$condutaCrianca->__set('professor', $_POST['professor']);
			$condutaCrianca->__set('questionario_id', $questionario->__get('id'));

			$condutaCriancaService = new CondutaCriancaService($conexao, $condutaCrianca);
			$condutaCriancaService->inserir();


			$vars = array(
				'labio',
				'mucosa',
				'lingua',
				'soalho',
				'palato_duro',
				'garganta',
				'palato_mole',
				'alveolar',
				'gengiva',
				'salivar',
				'linfonodos',
				'atm',
				'mastigadores',
				'oclusao',
			);
			defineTrueFalse($vars);

			// Insere exame fisico
			$exameFisico = new ExameFisico();
			$exameFisico->__set('labio', $_POST['labio']);
			$exameFisico->__set('mucosa', $_POST['mucosa']);
			$exameFisico->__set('lingua', $_POST['lingua']);
			$exameFisico->__set('soalho', $_POST['soalho']);
			$exameFisico->__set('palato_duro', $_POST['palato_duro']);
			$exameFisico->__set('garganta', $_POST['garganta']);
			$exameFisico->__set('palato_mole', $_POST['palato_mole']);
			$exameFisico->__set('alveolar', $_POST['alveolar']);
			$exameFisico->__set('gengiva', $_POST['gengiva']);
			$exameFisico->__set('salivar', $_POST['salivar']);
			$exameFisico->__set('linfonodos', $_POST['linfonodos']);
			$exameFisico->__set('atm', $_POST['atm']);
			$exameFisico->__set('mastigadores', $_POST['mastigadores']);
			$exameFisico->__set('oclusao', $_POST['oclusao']);
			$exameFisico->__set('alteracoes', $_POST['alteracoes']);
			$exameFisico->__set('pamax', $_POST['pamax']);
			$exameFisico->__set('pamin', $_POST['pamin']);
			$exameFisico->__set('presuntivo', $_POST['presuntivo']);
			$exameFisico->__set('complementares', $_POST['complementares']);
			$exameFisico->__set('definitivo', $_POST['definitivo']);
			$exameFisico->__set('proservacao', $_POST['proservacao']);
			$exameFisico->__set('plano', $_POST['plano']);
			$exameFisico->__set('alunos_exame', $_POST['alunos_exame']);
			$exameFisico->__set('professor_exame', $_POST['professor_exame']);
			$exameFisico->__set('questionario_id', $questionario->__get('id'));

			$exameFisicoService = new ExameFisicoService($conexao, $exameFisico);
			$exameFisicoService->inserir();
		}

		header('Location: ../../Public/views/lista_pacientes.php');
	}

	if( $acao == 'atualizar') {
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

		$questionario->__set('id', $_POST['questionario_id']);
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
		$questionario->__set('outros', $_POST['outros']);
		$questionario->__set('fumante', $_POST['fumante']);
		$questionario->__set('frequencia', $_POST['frequencia']);

		$conexao = new Connection();
		$questionarioService = new QuestionarioService($conexao, $questionario);

		// Se inserir o Questionario, insere os dados complementares
		if ($questionarioService->atualizar()) {
			// Insere o questionario infantil
			$vars = array(
				'problemas_parto',
				'anestesia',
				'doencao_contagiosa',
				'vacinada',
			);
			defineTrueFalse($vars);

			// Insere questionario da crianca
			$questionarioCrianca = new QuestionarioCrianca();
			$questionarioCrianca->__set('gestacional', $_POST['gestacional']);
			$questionarioCrianca->__set('parto', $_POST['parto']);
			$questionarioCrianca->__set('problemas_parto', $_POST['problemas_parto']);
			$questionarioCrianca->__set('tipo_amamentacao', $_POST['tipo_amamentacao']);
			$questionarioCrianca->__set('idade_amamentacao', $_POST['idade_amamentacao']);
			$questionarioCrianca->__set('anestesia', $_POST['anestesia']);
			$questionarioCrianca->__set('doencao_contagiosa', $_POST['doencao_contagiosa']);
			$questionarioCrianca->__set('vacinada', $_POST['vacinada']);
			$questionarioCrianca->__set('questionario_id', $questionario->__get('id'));

			$questionarioCriancaService = new QuestionarioCriancaService($conexao, $questionarioCrianca);
			$questionarioCriancaService->atualizar();

			$vars = array(
				'sentou',
				'engatinhou',
				'andou',
				'falou',
				'dificuldade_aprendizado',
				'postura_normal',
				'fala_normal',
				'paralisia',
				'enurese',
				'esfincteres',
				'tique',
				'fobia',
				'ansiedade',
				'medo',
				'birra',
				'ciume',
			);
			defineTrueFalse($vars);

			// Insere conduta da crianca
			$condutaCrianca = new CondutaCrianca();
			$condutaCrianca->__set('sentou', $_POST['sentou']);
			$condutaCrianca->__set('engatinhou', $_POST['engatinhou']);
			$condutaCrianca->__set('andou', $_POST['andou']);
			$condutaCrianca->__set('falou', $_POST['falou']);
			$condutaCrianca->__set('dificuldade_aprendizado', $_POST['dificuldade_aprendizado']);
			$condutaCrianca->__set('humor', $_POST['humor']);
			$condutaCrianca->__set('sono', $_POST['sono']);
			$condutaCrianca->__set('postura_normal', $_POST['postura_normal']);
			$condutaCrianca->__set('fala_normal', $_POST['fala_normal']);
			$condutaCrianca->__set('paralisia', $_POST['paralisia']);
			$condutaCrianca->__set('enurese', $_POST['enurese']);
			$condutaCrianca->__set('esfincteres', $_POST['esfincteres']);
			$condutaCrianca->__set('alimentacao', $_POST['alimentacao']);
			$condutaCrianca->__set('sociabilidade', $_POST['sociabilidade']);
			$condutaCrianca->__set('tique', $_POST['tique']);
			$condutaCrianca->__set('fobia', $_POST['fobia']);
			$condutaCrianca->__set('ansiedade', $_POST['ansiedade']);
			$condutaCrianca->__set('medo', $_POST['medo']);
			$condutaCrianca->__set('birra', $_POST['birra']);
			$condutaCrianca->__set('ciume', $_POST['ciume']);
			$condutaCrianca->__set('observacoes', $_POST['observacoes']);
			$condutaCrianca->__set('alunos', $_POST['alunos']);
			$condutaCrianca->__set('professor', $_POST['professor']);
			$condutaCrianca->__set('questionario_id', $questionario->__get('id'));

			$condutaCriancaService = new CondutaCriancaService($conexao, $condutaCrianca);
			$condutaCriancaService->atualizar();


			$vars = array(
				'labio',
				'mucosa',
				'lingua',
				'soalho',
				'palato_duro',
				'garganta',
				'palato_mole',
				'alveolar',
				'gengiva',
				'salivar',
				'linfonodos',
				'atm',
				'mastigadores',
				'oclusao',
			);
			defineTrueFalse($vars);

			// Insere exame fisico
			$exameFisico = new ExameFisico();
			$exameFisico->__set('labio', $_POST['labio']);
			$exameFisico->__set('mucosa', $_POST['mucosa']);
			$exameFisico->__set('lingua', $_POST['lingua']);
			$exameFisico->__set('soalho', $_POST['soalho']);
			$exameFisico->__set('palato_duro', $_POST['palato_duro']);
			$exameFisico->__set('garganta', $_POST['garganta']);
			$exameFisico->__set('palato_mole', $_POST['palato_mole']);
			$exameFisico->__set('alveolar', $_POST['alveolar']);
			$exameFisico->__set('gengiva', $_POST['gengiva']);
			$exameFisico->__set('salivar', $_POST['salivar']);
			$exameFisico->__set('linfonodos', $_POST['linfonodos']);
			$exameFisico->__set('atm', $_POST['atm']);
			$exameFisico->__set('mastigadores', $_POST['mastigadores']);
			$exameFisico->__set('oclusao', $_POST['oclusao']);
			$exameFisico->__set('alteracoes', $_POST['alteracoes']);
			$exameFisico->__set('pamax', $_POST['pamax']);
			$exameFisico->__set('pamin', $_POST['pamin']);
			$exameFisico->__set('presuntivo', $_POST['presuntivo']);
			$exameFisico->__set('complementares', $_POST['complementares']);
			$exameFisico->__set('definitivo', $_POST['definitivo']);
			$exameFisico->__set('proservacao', $_POST['proservacao']);
			$exameFisico->__set('plano', $_POST['plano']);
			$exameFisico->__set('alunos_exame', $_POST['alunos_exame']);
			$exameFisico->__set('professor_exame', $_POST['professor_exame']);
			$exameFisico->__set('questionario_id', $questionario->__get('id'));

			$exameFisicoService = new ExameFisicoService($conexao, $exameFisico);
			$exameFisicoService->atualizar();
		}

		header('Location: ../../Public/views/lista_pacientes.php');
	}

	if ($acao == 'recuperar') {
		$questionario = new Questionario();
		$conexao = new Connection();
		$questionarioService = new QuestionarioService($conexao, $questionario);
		$questionario = $questionarioService->getQuestionario($_GET['paciente']);
	}
?>