<?php
    $acao = 'recuperar';
    require '../../Http/Controller/QuestionarioController.php';
    require_once 'layouts/base.php';
    // echo '<pre>';
    // print_r($questionario);

?>

<!-- Content Section -->
<div class="content col-md-12">

    <div>

        <h1 class="exibetitulo">Prontuário</h1>
        <div class="col-md-6">
            <div class="controlcontainer firstcont">
                <h4>Questionário de Saúde</h4>
                <b>Queixa Principal</b><br>
                <?= $questionario->queixa ?>
                <br>

                <b>Histórico de Tratamento Atual</b><br>
                <?= $questionario->historico ?>
                <br>

                <b>1- Teve Hemorragia?</b><br>
                <?= $questionario->hemorragia == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>2- Sofre/sofreu alguma alergia?</b><br>
                <?= $questionario->alergia == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>3- Teve reumatisco infeccioso?</b><br>
                <?= $questionario->reumatismo == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>4- Sofre(u) de distúrbio cardiovascular?</b><br>
                <?= $questionario->disturbio_cardiovascular == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>5- Sofre(u) de gastrite?</b><br>
                <?= $questionario->gastrite == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>6- É diabético ou tem familiares diabéticos?</b><br>
                <?= $questionario->diabetico == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>7- Já desmaiou alguma vez?</b><br>
                <?= $questionario->desmaio == 1 ? 'Sim' : 'Não' ?>
                <br>
            </div>
        </div>

        <div class="col-md-6">
            <div class="controlcontainer firstcont"> 

                <b>8- Está sob tratamento médico?</b><br>
                <?= $questionario->tratamento == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>9- Está tomando algum medicamento?</b><br>
                <?= $questionario->medicamento == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>10- Esteve doente ou foi operado nos últimos 5 anos?</b><br>
                <?= $questionario->doenca_operacao == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>11- Tem hábitos, vícios ou manias?</b><br>
                <?= $questionario->vicios == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>12- Tem ansiedade/depressão?</b><br>
                <?= $questionario->ansiedade_depressao == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>13 -	Você e/ou algum familiar  teve algumas dessas doenças?</b><br>
                <br>

                <div class="col-md-6">
                    <b>Tuberculose</b><br>
                    <?= $questionario->tuberculose == 1 ? 'Sim' : 'Não' ?>
                    <br>

                    <b>Sífilis</b><br>
                    <?= $questionario->sifilis == 1 ? 'Sim' : 'Não' ?>
                    <br>

                    <b>Hepatite A, B, C</b><br>
                    <?= $questionario->hepatite == 1 ? 'Sim' : 'Não' ?>
                    <br>

                    <b>SIDA/AIDS</b><br>
                    <?= $questionario->aids == 1 ? 'Sim' : 'Não' ?>
                    <br>
                </div>

                <div class="col-md-6">
                    <b>Sarampo</b><br>
                    <?= $questionario->sarampo == 1 ? 'Sim' : 'Não' ?>
                    <br>

                    <b>Caxumba</b><br>
                    <?= $questionario->caxumba == 1 ? 'Sim' : 'Não' ?>
                    <br>

                    <b>Varicela</b><br>
                    <?= $questionario->varicela == 1 ? 'Sim' : 'Não' ?>
                    <br>

                    <b>Outras</b><br>
                    <?= $questionario->outros ?>
                    <br>
                </div>
                <br>

                <b>14-	É fumante?</b><br>
                <?= $questionario->fumante == 1 ? 'Sim' : 'Não' ?>  <b>Com que frequência?</b> <?= $questionario->frequencia ?> <b>/dia</b><br>
            </div>
        </div>

        <div class="col-md-6">
            <div class="controlcontainer lastcont">
                <h4 class="exibetitulo">Questionário Infantil</h4><br>

                <b>Histórico Gestacional</b><br>
                <?= $questionario->gestacional ?>
                <br>

                <b>Nasceu de Parto</b><br>
                <?= $questionario->parto ?>
                <br>

                <b>Problemas Durante o Parto?</b><br>
                <?= $questionario->problemas_parto == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>A amamentação foi:</b><br>
                <?= $questionario->tipo_amamentacao ?> <b>até a idade de:</b> <?= $questionario->idade_amamentacao ?> <b>anos</b><br>
                <br>

                <b>Já lhe foi dito para não tomar anestesia local?</b><br>
                <?= $questionario->anestesia == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>Já teve ou viveu com alguém que tivesse doença grave e contagiosa?</b><br>
                <?= $questionario->doencao_contagiosa == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>A criança já foi vacinada?</b><br>
                <?= $questionario->vacinada == 1 ? 'Sim' : 'Não' ?>
                <br>
            </div>
        </div>

        <div class="col-md-6">
            <div class="controlcontainer lastcont"> 
                <h4 class="exibetitulo">Conduta da Criança</h4>

                <b>Durante os primeiros 2 anos de vida a criança:</b><br>
                    <b>Sentou-se</b> <?= $questionario->sentou ? 'Sim' : 'Não' ?> <br>
                    <b>Engatinhou</b> <?= $questionario->engatinhou ? 'Sim' : 'Não'  ?> <br>
                    <b>Andou</b> <?= $questionario->andou ? 'Sim' : 'Não'  ?> <br>
                    <b>Falou</b> <?= $questionario->falou ? 'Sim' : 'Não' ?> <br>
                <br>

                <b>No lar e na escola a criança apresentou alguma dificuldade no aprendizado?</b><br>
                <?= $questionario->dificuldade_aprendizado == 1 ? 'Sim' : 'Não' ?>
                <br>

                <b>Estado Anímico:</b><br>
                <?= $questionario->humor ?>
                <br>

                <b>Tem o sono:</b><br>
                <?= $questionario->sono ?>
                <br>
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-6">
                <div class="controlcontainer lastcont"> 
                    <h4 class="exibetitulo">Apresenta Alguma Patologia de Conduta:</h4>
                    <b>Ansiedade:</b><br>
                    <?= $questionario->ansiedade ? 'Sim' : 'Não' ?>
                    <br>

                    <b>Medo:</b><br>
                    <?= $questionario->medo ? 'Sim' : 'Não' ?>
                    <br>

                    <b>Birra:</b><br>
                    <?= $questionario->birra ? 'Sim' : 'Não' ?>
                    <br>

                    <b>Ciúme:</b><br>
                    <?= $questionario->ciume ? 'Sim' : 'Não' ?>
                    <br>
                </div>
            </div>

            <div class="col-md-6">
                <div class="controlcontainer lastcont"> 
                    <h4 class="exibetitulo">Conduta Psicomotora:</h4>
                    <b>Postura:</b> <?= $questionario->postura_normal == 1 ? 'Postura normal' : 'Postura alterada' ?> <br>
                    <b>Fala:</b> <?= $questionario->fala_normal == 1 ? 'Fonação normal' : 'Distúrbios de fala' ?> <br>
                    <b>Alguma Paralisia:</b> <?= $questionario->paralisia ? 'Sim' : 'Não' ?> <br>
                    <b>Enurese Noturna:</b> <?= $questionario->enurese ? 'Sim' : 'Não' ?> <br>
                    <b>Descontrole dos Esfíncteres</b> <?= $questionario->esfincteres ? 'Sim' : 'Não' ?> <br>
                    <br>
                </div>
            </div>

            <div class="col-md-12">
                <div class="controlcontainer lastcont"> 
                    <h4 class="exibetitulo">Alimentação</h4>  
                    <?= $questionario->alimentacao ?>
                </div>
            </div>
        </div> 

        <div class="col-md-6">
            <div class="controlcontainer lastcont"> 
                <h4 class="exibetitulo">Exame Físico</h4>
                <div class="col-md-6">

                    <b>Lábio:</b><br>
                    <?= $questionario->labio == 1 ? 'Normal' : 'Alterado' ?>
                    <br>
                    
                    <b>Mucosa Jugal:</b><br>
                    <?= $questionario->mucosa == 1 ? 'Normal' : 'Alterado' ?>
                    <br>

                    <b>Língua:</b><br>
                    <?= $questionario->lingua == 1 ? 'Normal' : 'Alterado' ?>
                    <br>

                    <b>Soalho da Boca:</b><br>
                    <?= $questionario->soalho == 1 ? 'Normal' : 'Alterado' ?>
                    <br>

                    <b>Paleto Duro:</b><br>
                    <?= $questionario->palato_duro == 1 ? 'Normal' : 'Alterado' ?>
                    <br>

                    <b>Garganta:</b><br>
                    <?= $questionario->garganta == 1 ? 'Normal' : 'Alterado' ?>
                    <br>

                    <b>Paleto Mole:</b><br>
                    <?= $questionario->palato_mole == 1 ? 'Normal' : 'Alterado' ?>
                    <br>

                </div>
                <b>Mucosa Alveolar:</b><br>
                <?= $questionario->alveolar == 1 ? 'Normal' : 'Alterado' ?>
                <br>

                <b>Gengivas:</b><br>
                <?= $questionario->gengiva == 1 ? 'Normal' : 'Alterado' ?>
                <br>

                <b>Glândulas Salivares:</b><br>
                <?= $questionario->salivar == 1 ? 'Normal' : 'Alterado' ?>
                <br>

                <b>Linfonodos:</b><br>
                <?= $questionario->linfonodos == 1 ? 'Normal' : 'Alterado' ?>
                <br>

                <b>ATM:</b><br>
                <?= $questionario->atm == 1 ? 'Normal' : 'Alterado' ?>
                <br>

                <b>Músculos Mastigadores:</b><br>
                <?= $questionario->mastigadores == 1 ? 'Normal' : 'Alterado' ?>
                <br>

                <b>Oclusão:</b><br>
                <?= $questionario->oclusao == 1 ? 'Normal' : 'Alterado' ?>
                <br>
            </div>
        </div>

        <div class="col-md-6">
            <div class="controlcontainer lastcont">
                <h4 class="exibetitulo">Desfecho de Consulta:</h4>
                <b>Alterações Encontradas:</b><?= $questionario->alteracoes ?><br>
                <br>

                <b>Pressão Arterial Máxima:</b><?= $questionario->pamax ?> <b>mmgH</b><br>
                <br>

                <b>Pressão Arterial Mínima:</b><?= $questionario->pamin ?> <b>mmgH</b><br>
                <br>

                <b>Diagnóstico Presuntivo:</b><?= $questionario->presuntivo ?><br>
                <br>

                <b>Exames Complementares:</b><?= $questionario->complementares ?><br>
                <br>

                <b>Diagnóstico Definitivo:</b><?= $questionario->definitivo ?><br>
                <br>

                <b>Tratamento/Proservação:</b><?= $questionario->proservacao ?><br>
                <br>

                <b>Plano de Tratamento:</b><?= $questionario->plano ?><br>
                <br>
            </div>
        </div>

        <div class="col-md-12">
            <div class="controlcontainer lastcont"> 
                <h4 class="exibetitulo">Responsáveis do Tratamento</h4>
                <b>Alunos (Conduta da Criança):</b><br>        
                <?= $questionario->alunos ?>
                <br>
                <b>Professor (Conduta da Criança):</b><br>
                <?= $questionario->professor ?>
                <br>
                <b>Alunos (Exame Físico):</b><br>        
                <?= $questionario->alunos_exame ?>
                <br>
                <b>Professor (Exame Físico):</b><br>
                <?= $questionario->professor_exame ?>
                <br>
            </div>
        </div>
    </div>
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>