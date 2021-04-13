<?php
    $acao = 'listar';
    require '../../Http/Controller/ProntuarioController.php';
    require_once 'layouts/base.php';
?>

<!-- Content Section -->
<div class="content col-md-12">
    <?php foreach ($prontuarios as $prontuario) { ?>
        <div class="containerpront">
            <h4 class="exibetitulo">Prontuario de Atendimento<h4>
            <label class="textformat">Data da consulta:</label><br>
            <?= $prontuario->dia; ?> <br>
            <label class="textformat">Os procedimentos realizados nesta data foram:</label><br>
            <?= $prontuario->procedimentos; ?>
        </div>
    <?php } ?>
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>