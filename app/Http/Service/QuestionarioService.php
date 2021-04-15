<?php

// namespace Http\Service;

//CRUD
class QuestionarioService {

	private $conexao;
	private $questionario;

	public function __construct(Connection $conexao, Questionario $questionario) {
		$this->conexao = $conexao->dbConnection();
		$this->questionario = $questionario;
	}

	public function inserir() { //create
		$query = 'INSERT INTO questionario (paciente_id, queixa, historico, hemorragia, alergia, reumatismo, disturbio_cardiovascular, gastrite, diabetico, desmaio, tratamento, medicamento, doenca_operacao, vicios, ansiedade_depressao, tuberculose, sifilis, hepatite, aids, sarampo, caxumba, varicela, outros, fumante, frequencia) VALUES (
			:paciente_id,
			:queixa,
			:historico,
			:hemorragia,
			:alergia,
			:reumatismo,
			:disturbio_cardiovascular,
			:gastrite,
			:diabetico,
			:desmaio,
			:tratamento,
			:medicamento,
			:doenca_operacao,
			:vicios,
			:ansiedade_depressao,
			:tuberculose,
			:sifilis,
			:hepatite,
			:aids,
			:sarampo,
			:caxumba,
			:varicela,
			:outros,
			:fumante,
			:frequencia
		) RETURNING id';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':paciente_id', $this->questionario->__get('paciente_id'));
		$stmt->bindValue(':queixa', $this->questionario->__get('queixa'));
		$stmt->bindValue(':historico', $this->questionario->__get('historico'));
		$stmt->bindValue(':hemorragia', $this->questionario->__get('hemorragia'));
		$stmt->bindValue(':alergia', $this->questionario->__get('alergia'));
		$stmt->bindValue(':reumatismo', $this->questionario->__get('reumatismo'));
		$stmt->bindValue(':disturbio_cardiovascular', $this->questionario->__get('disturbio_cardiovascular'));
		$stmt->bindValue(':gastrite', $this->questionario->__get('gastrite'));
		$stmt->bindValue(':diabetico', $this->questionario->__get('diabetico'));
		$stmt->bindValue(':desmaio', $this->questionario->__get('desmaio'));
		$stmt->bindValue(':tratamento', $this->questionario->__get('tratamento'));
		$stmt->bindValue(':medicamento', $this->questionario->__get('medicamento'));
		$stmt->bindValue(':doenca_operacao', $this->questionario->__get('doenca_operacao'));
		$stmt->bindValue(':vicios', $this->questionario->__get('vicios'));
		$stmt->bindValue(':ansiedade_depressao', $this->questionario->__get('ansiedade_depressao'));
		$stmt->bindValue(':tuberculose', $this->questionario->__get('tuberculose'));
		$stmt->bindValue(':sifilis', $this->questionario->__get('sifilis'));
		$stmt->bindValue(':hepatite', $this->questionario->__get('hepatite'));
		$stmt->bindValue(':aids', $this->questionario->__get('aids'));
		$stmt->bindValue(':sarampo', $this->questionario->__get('sarampo'));
		$stmt->bindValue(':caxumba', $this->questionario->__get('caxumba'));
		$stmt->bindValue(':varicela', $this->questionario->__get('varicela'));
		$stmt->bindValue(':outros', $this->questionario->__get('outros'));
		$stmt->bindValue(':fumante', $this->questionario->__get('fumante'));
		$stmt->bindValue(':frequencia', $this->questionario->__get('frequencia'));

		if($stmt->execute()) {
			$id = $stmt->fetchColumn();
			$this->questionario->__set('id', $id);

			return True;
		}

		return False;
	}

	public function atualizar() { //create
		$query = '
			UPDATE questionario
			SET	queixa=:queixa,
				historico=:historico,
				hemorragia=:hemorragia,
				alergia=:alergia,
				reumatismo=:reumatismo,
				disturbio_cardiovascular=:disturbio_cardiovascular,
				gastrite=:gastrite,
				diabetico=:diabetico,
				desmaio=:desmaio,
				tratamento=:tratamento,
				medicamento=:medicamento,
				doenca_operacao=:doenca_operacao,
				vicios=:vicios,
				ansiedade_depressao=:ansiedade_depressao,
				tuberculose=:tuberculose,
				sifilis=:sifilis,
				hepatite=:hepatite,
				aids=:aids,
				sarampo=:sarampo,
				caxumba=:caxumba,
				varicela=:varicela,
				outros=:outros,
				fumante=:fumante,
				frequencia=:frequencia
			WHERE id = :id
		';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':queixa', $this->questionario->__get('queixa'));
		$stmt->bindValue(':historico', $this->questionario->__get('historico'));
		$stmt->bindValue(':hemorragia', $this->questionario->__get('hemorragia'));
		$stmt->bindValue(':alergia', $this->questionario->__get('alergia'));
		$stmt->bindValue(':reumatismo', $this->questionario->__get('reumatismo'));
		$stmt->bindValue(':disturbio_cardiovascular', $this->questionario->__get('disturbio_cardiovascular'));
		$stmt->bindValue(':gastrite', $this->questionario->__get('gastrite'));
		$stmt->bindValue(':diabetico', $this->questionario->__get('diabetico'));
		$stmt->bindValue(':desmaio', $this->questionario->__get('desmaio'));
		$stmt->bindValue(':tratamento', $this->questionario->__get('tratamento'));
		$stmt->bindValue(':medicamento', $this->questionario->__get('medicamento'));
		$stmt->bindValue(':doenca_operacao', $this->questionario->__get('doenca_operacao'));
		$stmt->bindValue(':vicios', $this->questionario->__get('vicios'));
		$stmt->bindValue(':ansiedade_depressao', $this->questionario->__get('ansiedade_depressao'));
		$stmt->bindValue(':tuberculose', $this->questionario->__get('tuberculose'));
		$stmt->bindValue(':sifilis', $this->questionario->__get('sifilis'));
		$stmt->bindValue(':hepatite', $this->questionario->__get('hepatite'));
		$stmt->bindValue(':aids', $this->questionario->__get('aids'));
		$stmt->bindValue(':sarampo', $this->questionario->__get('sarampo'));
		$stmt->bindValue(':caxumba', $this->questionario->__get('caxumba'));
		$stmt->bindValue(':varicela', $this->questionario->__get('varicela'));
		$stmt->bindValue(':outros', $this->questionario->__get('outros'));
		$stmt->bindValue(':fumante', $this->questionario->__get('fumante'));
		$stmt->bindValue(':frequencia', $this->questionario->__get('frequencia'));
		$stmt->bindValue(':id', $this->questionario->__get('id'));

		return $stmt->execute();
	}

	public function getQuestionario($id) { //read;
		$query = '
			SELECT * FROM questionario
			INNER JOIN paciente ON
				paciente.id = questionario.paciente_id
			INNER JOIN questionario_infantil ON
				questionario.id = questionario_infantil.questionario_id
			INNER JOIN conduta_crianca ON
				questionario.id = conduta_crianca.questionario_id
			INNER JOIN exame_fisico ON
				questionario.id = exame_fisico.questionario_id WHERE paciente.id = :id
		';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $id);
		$stmt->execute();

		// Se encontrou o questionario
		if($stmt->rowCount() > 0) {
			return $stmt->fetch(PDO::FETCH_OBJ);
		}

		return False;
	}
}

?>