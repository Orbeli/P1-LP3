<?php 
    $acao = 'listar';
    require '../../Http/Controller/PacienteController.php';
    require_once 'layouts/base.php';
?>

<!-- Content Section -->
<div class="content col-md-12">
    <div class="tabusers">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($pacientes as $paciente) { ?>
                    <tr>
                        <td><?= $paciente->id; ?></td>
                        <td><?= $paciente->nome; ?></td>
                        <td>
                            <a class="btnacao" href="/public/views/userdetails.php?paciente=<?= $paciente->id ?>">
                                <i class="fas fa-users"></i>
                                <span class="sr-only">(current)</span>
                            </a>

                            <a class="btnacao" href="/public/views/prontuario.php?paciente=<?= $paciente->id ?>">
                                <i class="fas fa-book-medical"></i>
                                <span class="sr-only">(current)</span>
                            </a>

                            <a class="btnacao" href="/public/views/prontuarioatendimento.php?paciente=<?= $paciente->id ?>">
                                <i class="fas fa-notes-medical"></i>
                                <span class="sr-only">(current)</span>
                            </a>

                            <a class="btnacao" href="/public/views/fichacadastral.php?acao=atualizar&paciente=<?= $paciente->id ?>">
                                <i class="fas fa-user-edit"></i>
                                <span class="sr-only">(current)</span>
                            </a>

                            <a class="btnacao" href="/public/views/checkpront.php?paciente=<?= $paciente->id ?>">
                                <i class="fas fa-clipboard-list"></i>
                                <span class="sr-only">(current)</span>
                            </a>

                            <a class="btnacao" href="/public/views/userdetails.php?acao=remover&paciente=<?= $paciente->id ?>">
                                <i class="fas fa-trash-alt"></i>
                                <span class="sr-only">(current)</span>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>    
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>