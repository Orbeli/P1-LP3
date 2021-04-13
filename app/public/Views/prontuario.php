<?php require_once 'layouts/base.php'; ?>

<!-- Content Section -->
<div class="content col-md-12">
    
<form method="post" action="/Http/Controller/ProntuarioController.php?acao=inserir&paciente_id=<?= $_GET['paciente']?>">
        <div class="containerpront">
            <h4 class="exibetitulo">Prontuario de Atendimento<h4>
            <label class="textformat">Data da consulta:</label><br>
            <input 
                class="caixatexto" 
                type="date"
                name="dia"
                id="dia"/>
                <br><br>

            <label class="textformat">Digite os procedimentos realizados:</label><br>
            <textarea class="estilotxtarea" id="procedimentos" name="procedimentos"></textarea>
            <div>
                <input class="submit" type="submit">
            </div>
        </div>
    </form>
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>