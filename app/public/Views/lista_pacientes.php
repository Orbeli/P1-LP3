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
                            if ($paciente->data_nasc != NULL) {
                                // separando yyyy, mm, ddd
                                list($ano, $mes, $dia) = explode('-', $paciente->data_nasc);
    
                                // data atual
                                $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                                // Descobre a unix timestamp da data de nascimento
                                $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
    
                                // cálcula a idade
                                $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25)." anos";
                            } else {
                                $idade = "Não Informado";
                            }
                    ?>
                        <tr>
                            <td><?= $paciente->id; ?></td>
                            <td><?= $paciente->nome; ?></td>
                            <td><?= $paciente->cpf; ?></td>
                            <td><?= $idade; ?></td>
                            <td>
                                <!-- Adiciona um prontuario -->
                                <a class="btnacao" data-toggle="tooltip" title="Cadastrar Prontuário" href="/public/views/prontuario.php?paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-notes-medical"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Adiciona uma ficha de avaliacao -->
                                <a class="btnacao" data-toggle="tooltip" title="Preencher Questionário" href="/public/views/questionario.php?paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-book-medical"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Exibe os dados do paciente -->
                                <a class="btnacao" data-toggle="tooltip" title="Dados do Paciente" href="/public/views/paciente.php?paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-users"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Exibi a ficha de avaliacao do paciente -->
                                <a class="btnacao" data-toggle="tooltip" title="Ver Questionário" href="/public/views/lista_questionario.php?paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-book-medical"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Exibe o prontuario do paciente -->
                                <a class="btnacao" data-toggle="tooltip" title="Ver Prontuário" href="/public/views/lista_prontuario.php?paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-clipboard-list"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Edita o paciente -->
                                <a class="btnacao" data-toggle="tooltip" title="Editar Paciente" href="/public/views/cadastro_paciente.php?acao=atualizar&paciente=<?= $paciente->id ?>">
                                    <button type="button" class="btn btn-info">
                                        <i class="fas fa-user-edit"></i>
                                    </button>
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- Remove o paciente -->
                                <button type="button" data-toggle="tooltip" title="Remover Paciente" class="btn btn-danger excluir-item" href="/public/views/paciente.php?acao=remover&paciente=<?= $paciente->id ?>">
                                    <i class="fas fa-trash-alt"></i>
                                    <span class="sr-only">(current)</span>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?= $pagina <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="?pagina=<?= $pagina-1 ?>" tabindex="-1">Anterior</a>
                    </li>
                    <?php for ($page=1; $page <= $paginas; $page++) { ?>
                        <li class="page-item"><a class="page-link" href="?pagina=<?= $page ?>"><?= $page ?></a></li>
                    <?php } ?>
                    <li class="page-item <?= $pagina < $paginas ? '' : 'disabled' ?>">
                    <a class="page-link" href="?pagina=<?= $pagina+1 ?>">Proxima</a>
                    </li>
                </ul>
                <p>Mostrando <?= $inicio ?> - <?= $fim ?> de <?= $total ?> resultados.</p>
            </nav>
        </div>
    <?php } else { ?>
        <div>
            <h1>SEM DADOS</h1>
        </div>
    <?php } ?>
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>