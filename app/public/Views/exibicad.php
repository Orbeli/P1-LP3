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
                <th scope="col">CPF</th>
                <th scope="col">Idade</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach ($pacientes as $paciente) { 
                        // separando yyyy, mm, ddd
                        list($ano, $mes, $dia) = explode('-', $paciente->data_nasc);

                        // data atual
                        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                        // Descobre a unix timestamp da data de nascimento
                        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

                        // cálcula a idade
                        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                ?>
                    <tr>
                        <td><?= $paciente->id; ?></td>
                        <td><?= $paciente->nome; ?></td>
                        <td><?= $paciente->cpf; ?></td>
                        <td><?= $idade; ?> anos</td>
                        <td>
                            <!-- Exibe os dados do paciente -->
                            <a class="btnacao" href="/public/views/userdetails.php?paciente=<?= $paciente->id ?>">
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-users"></i>
                                </button>
                                <span class="sr-only">(current)</span>
                            </a>

                            <!-- Exibi a ficha de avaliacao do paciente -->
                            <a class="btnacao" href="/public/views/prontuario.php?paciente=<?= $paciente->id ?>">
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-book-medical"></i>
                                </button>
                                <span class="sr-only">(current)</span>
                            </a>

                            <!-- Exibe o prontuario do paciente -->
                            <a class="btnacao" href="/public/views/checkpront.php?paciente=<?= $paciente->id ?>">
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-clipboard-list"></i>
                                </button>
                                <span class="sr-only">(current)</span>
                            </a>

                            <!-- Adiciona um prontuario -->
                            <a class="btnacao" href="/public/views/prontuarioatendimento.php?paciente=<?= $paciente->id ?>">
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-notes-medical"></i>
                                </button>
                                <span class="sr-only">(current)</span>
                            </a>

                            <!-- Edita o paciente -->
                            <a class="btnacao" href="/public/views/fichacadastral.php?acao=atualizar&paciente=<?= $paciente->id ?>">
                                <button type="button" class="btn btn-info">
                                    <i class="fas fa-user-edit"></i>
                                </button>
                                <span class="sr-only">(current)</span>
                            </a>

                            <!-- Remove o paciente -->
                            <a class="btnacao" href="/public/views/userdetails.php?acao=remover&paciente=<?= $paciente->id ?>">
                                <button type="button" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
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