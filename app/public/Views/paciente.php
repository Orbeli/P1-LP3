<?php
    $acao = 'recuperar';
    require '../../Http/Controller/PacienteController.php';
    require_once 'layouts/base.php';
?>

<!-- Content Section -->
<div class="content col-md-12">

    <div>
        <div class="customDetails">
            <div class="controlcontainer col-md-6 firstcont">
                <h4 class="exibetitulo"> 
                    Dados Gerais Paciente 
                </h4>
                <b>Id Cadastro:</b> <?= $paciente->id ?><br>
                <b>Nome:</b> <?= $paciente->nome ?> <br>
                <b>Data Nascimento:</b> <?= $paciente->data_nasc ?> <br>
                <b>Sexo:</b> <?= $paciente->sexo ?> <br>
                <b>Peso:</b> <?= $paciente->peso ?> <br>
                <b>Altura:</b> <?= $paciente->altura ?> <br>
                <b>Cor:</b> <?= $paciente->cor ?> <br>
                <b>Escolaridade:</b> <?= $paciente->escolaridade ?> <br> 
                <b>Profissão:</b> <?= $paciente->profissao ?> <br>
                <b>RG:</b> <?= $paciente->rg ?> <br>
                <b>CPF:</b> <?= $paciente->cpf ?> <br>
                <b>Estado Civil:</b> <?= $paciente->estado_civil ?> <br>
                <b>Naturalidade:</b> <?= $paciente->naturalidade ?> <br>
                <b>Estado:</b> <?= $paciente->estado_nasc ?> <br>
            </div>
        </div>

        <div class="customDetails">
            <div class="controlcontainer col-md-6 firstcont"> 
                <h4 class="exibetitulo"> 
                    Dados de endereço e telefone
                </h4>
                <b>Rua:</b> <?= $paciente->rua ?> <br>
                <b>Número:</b> <?= $paciente->numero ?> <br>
                <b>Complemento:</b> <?= $paciente->complemento ?> <br>
                <b>Bairro:</b> <?= $paciente->bairro ?> <br>
                <b>Cep:</b> <?= $paciente->cep ?> <br>
                <b>Cidade:</b> <?= $paciente->cidade ?> <br>
                <b>Estado:</b> <?= $paciente->estado ?> <br>
                <b>Telefones:</b> <?= $paciente->contato ?> <br> 
            </div>   
        </div>

        <div class="centraliza">
            <div class="controlcontainer col-md-6 lastcont"> 
                <h4 class="exibetitulo"> 
                    Dados da filiação
                </h4>
                <b>Nome da Mãe:</b> <?= $paciente->nome_mae ?> <br>
                <b>Nome do pai:</b> <?= $paciente->nome_pai ?> <br>
                <b>Nacionalidade da mãe:</b> <?= $paciente->nacionalidade_mae ?> <br>
                <b>Nacionalidade do pai:</b> <?= $paciente->nacionalidade_pai ?> <br>               
            </div>   
        </div>
    </div>

</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>