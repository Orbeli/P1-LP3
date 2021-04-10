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
}

?>