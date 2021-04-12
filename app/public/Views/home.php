<?php require_once 'layouts/base.php'; ?>



<div class="content col-md-12">

<div class="container">
    <div class="card">
        <div class="circle">
            <h2>Ficha Cadastral</h2>
        </div>
        <div class="content">
            <p>A ficha cadastral tem como intuito de salvar seus dados em nossa plataforma para construirmos seu historico de atendimento com nossa equipe, 
                assim agilizando o processo de seu atendimento durante seu tratamento.</p>
            <a class="nav-link" href="/public/views/fichacadastral.php">Ficha Cadastral<span class="sr-only">(current)</span></a>
        </div>
    </div>
    <div class="card">
        <div class="circle">
            <h2>Questionario</h2>
        </div>
        <div class="content">
            <p>Descreva Sua Situacao</p>
            <a class="nav-link" href="/public/views/questgrowkid.php">Questionário<span class="sr-only">(current)</span></a>
        </div>
    </div>

    <div class="card">
        <div class="circle">
            <h2>Cadastrados</h2>
        </div>
        <div class="content">
            <p>Exibir Cadastros</p>
            <a class="nav-link" href="/public/views/exibicad.php">Exibir Cadastros<span class="sr-only">(current)</span></a>
        </div>
    </div>
</div>

</div>
<!-- Content Section 
<div class="content col-md-12">
    <h1><a class="nav-link" href="public/views/fichacadastral.php">Ficha Cadastral<span class="sr-only">(current)</span></a></h1>
    <h1><a class="nav-link" href="public/views/questgrowkid.php">Questionário<span class="sr-only">(current)</span></a></h1>
    <h1><a class="nav-link" href="public/views/exibicad.php">Exibir Cadastros<span class="sr-only">(current)</span></a></h1>
    <form method="post" action="/Http/Controller/PacienteController.php?acao=inserir">
        <div class="form-group">
            <label>Descrição da tarefa:</label>
            <input type="text" class="form-control" name="nome" placeholder="Exemplo: Lavar o carro">
        </div>

        <button class="btn btn-success">Cadastrar</button>
    </form>
</div>

Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>