<?php require_once 'layouts/base.php'; ?>

<!-- Content Section -->
<div class="content col-md-12">
    
    <form action="post">
        <div class="containerpront">

            <h4 class="exibetitulo">Prontuario de Atendimento<h4>
            <label class="textformat">Data da consulta:</label><br>
            <input 
                class="caixatexto" 
                type="date"
                name="data_consulta"
                id="data_consulta"/>
                <br><br>

            <label class="textformat">Digite os procedimentos realizados:</label><br>
            <textarea class="estilotxtarea" id="atend_consulta" name="atend_consulta">
            
            </textarea>
        </div>
    </form>        

</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>