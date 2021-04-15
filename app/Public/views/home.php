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
                <a class="nav-link" href="/public/views/cadastro_paciente.php">Ficha Cadastral<span class="sr-only">(current)</span></a>
            </div>
        </div>

        <div class="card">
            <div class="circle">
                <h2>Questionario</h2>
            </div>

            <div class="content">
                <p>Descreva Sua Situacao</p>
                <a class="nav-link" href="/public/views/questionario.php">Questionário<span class="sr-only">(current)</span></a>
            </div>
        </div>

        <div class="card">
            <div class="circle">
                <h2>Pacientes</h2>
            </div>

            <div class="content">
                <p>Exibir Cadastros</p>
                <a class="nav-link" href="/public/views/lista_pacientes.php">Exibir Cadastros<span class="sr-only">(current)</span></a>
            </div>
        </div>
    </div>
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>