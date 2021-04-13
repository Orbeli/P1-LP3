<?php 
    $acao = 'listar';
    require '../../Http/Controller/PacienteController.php';
    require_once 'layouts/base.php';
?>

<!-- Content Section -->
<div class="content col-md-12">
    <div>
        <form method="get" action="/public/views/lista_pacientes.php">
        <!-- <label>pesquisar</label> -->
        <input 
            type="text"
            id="busca"
            name="busca"
            placeholder="pesquisa por nome"/>
            <div>
                <input class="submit" type="submit" value="pesquisar">
            </div>
        </form>
    </div>

    <?php if (!empty($pacientes)) { ?>
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
                                <!-- Adiciona um prontuario -->
                                <a class="btnacao" href="/public/views/prontuario.php?paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-notes-medical"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Adiciona uma ficha de avaliacao -->
                                <a class="btnacao" href="/public/views/questionario.php?paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-book-medical"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Exibe os dados do paciente -->
                                <a class="btnacao" href="/public/views/paciente.php?paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-users"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Exibi a ficha de avaliacao do paciente -->
                                <a class="btnacao" href="/public/views/lista_questionario.php?paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-book-medical"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Exibe o prontuario do paciente -->
                                <a class="btnacao" href="/public/views/lista_prontuario.php?paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-clipboard-list"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Edita o paciente -->
                                <a class="btnacao" href="/public/views/cadastro_paciente.php?acao=atualizar&paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-info">
                                        <i class="fas fa-user-edit"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Remove o paciente -->
                                <button type="button" class="btn btn-danger excluir-item" href="/public/views/paciente.php?acao=remover&paciente=<?= $paciente->id ?>">
                                    <i class="fas fa-trash-alt"></i>
                                    <span class="sr-only">(current)</span>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <div>
            <h1>SEM DADOS</h1>
        </div>
    <?php } ?>
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>