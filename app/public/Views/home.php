<?php require_once 'layouts/base.php'; ?>

<!-- Content Section -->
<div class="content col-md-12">
    <h1><a class="nav-link" href="public/views/fichacadastral.php">Ficha Cadastral<span class="sr-only">(current)</span></a></h1>
    <h1><a class="nav-link" href="public/views/questgrowkid.php">Questionário<span class="sr-only">(current)</span></a></h1>
    <form method="post" action="/Http/Controller/PacienteController.php?acao=inserir">
        <div class="form-group">
            <label>Descrição da tarefa:</label>
            <input type="text" class="form-control" name="nome" placeholder="Exemplo: Lavar o carro">
        </div>

        <button class="btn btn-success">Cadastrar</button>
    </form>
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>