<?php
    if ($_GET['acao'] == 'atualizar') {
        $acao = 'atualizar';
        require_once '../../Http/Controller/PacienteController.php';
    } else {
        $acao = 'inserir';
    }
    require_once 'layouts/base.php';
?>

<!-- Content Section -->
<div class="content col-md-12">
    <form method="post" action="/Http/Controller/PacienteController.php?acao=<?= $acao ?>">
        <div id="containerform">
            <!-- inicio formulario -->
            <br>
            <label class="textformat">
            Digite seu Nome:
            </label>    
            <input
                class="boxtext" 
                type="text" 
                name="nome" 
                id="nome"
                value="<?= $paciente->nome ?>"
                placeholder="Nome"/>
            <br><br>
            <label class="textformat">
            Data de Nascimento:
            </label> <br>
            <input 
                class="boxtext" 
                type="date"
                name="data_nasc"
                id="data_nasc"
                value="<?= $paciente->data_nasc ?>"
                placeholder="Data de nascimento"/>
            <br><br>
            <label for="sexo" class="textformat">
            Selecione seu sexo:
            </label><br>
            <select name="sexo" id="sexo" class="boxtext">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
            <br><br>
            <label class="textformat">
            Digite seu peso:
            </label> <br>
            <input
                class="boxtext" 
                type="text" 
                name="peso" 
                id="peso"
                value="<?= $paciente->peso ?>"
                placeholder="Peso em Kg"/>
            <br><br>
            <label class="textformat">
            Digite sua altura:
            </label><br>
            <input
                class="boxtext"  
                type="text" 
                name="altura" 
                id="altura"
                value="<?= $paciente->altura ?>" 
                placeholder="Altura em metros"/>
            <br><br>
            <label class="textformat">
            Digite sua cor:
            </label><br>
            <input
                class="boxtext"  
                type="text" 
                name="cor" 
                id="cor"
                value="<?= $paciente->cor ?>"
                placeholder="Digite sua cor (Branco, pardo ou negro)"/>
            <br><br>
            <label class="textformat">
            Digite sua escolaridade:
            </label><br>
            <input 
                class="boxtext" 
                type="text" 
                name="escolaridade" 
                id="escolaridade"
                value="<?= $paciente->escolaridade ?>"
                placeholder="Escolaridade"/>
            <br><br>
            <label class="textformat">
            Digite sua profissão:
            </label><br>
            <input 
                class="boxtext" 
                type="text" 
                name="profissao" 
                id="profissao"
                value="<?= $paciente->profissao ?>"
                placeholder="Profissão"/>
            <br><br>
            <label class="textformat">
            Digite seu RG:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="rg" 
                id="rg"
                value="<?= $paciente->rg ?>"
                placeholder="RG: 00.000.000-0"
                maxlength="13"/>
            <br><br>
            <label class="textformat">
            Digite seu CPF:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="cpf" 
                id="cpf"
                value="<?= $paciente->cpf ?>"
                placeholder="CPF: 000.000.000-00"
                maxlength="15"/>
            <br><br>
            <label class="textformat">
            Digite seu estado civil:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="estado_civil" 
                id="estado_civil"
                value="<?= $paciente->estado_civil ?>" 
                placeholder="Estado civil"/>
            <br><br>
            <label class="textformat">
            Digite sua Naturalidade:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="naturalidade" 
                id="naturalidade"
                value="<?= $paciente->naturalidade ?>"
                placeholder="Naturalidade"/>
            <br><br>
            <label class="textformat">
            Digite o estado:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="estado_nasc" 
                id="estado_nasc"
                value="<?= $paciente->estado_nasc ?>"
                placeholder="Estado"/>
            <br><br>
            <label class="textformat">
            Digite o nome do pai:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="nome_pai" 
                id="nome_pai"
                value="<?= $paciente->nome_pai ?>"
                placeholder="Nome do Pai"/>
            <br><br>
            <label class="textformat">
            Digite a nacionalidade do pai:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="nacionalidade_pai" 
                id="nacionalidade_pai"
                value="<?= $paciente->nacionalidade_pai ?>"
                placeholder="Nacionalidade do Pai"/>
            <br><br>
            <label class="textformat">
            Digite o nome da mãe:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="nome_mae" 
                id="nome_mae"
                value="<?= $paciente->nome_mae ?>"
                placeholder="Nome da Mãe"/>
            <br><br>
            <label class="textformat">
            Digite a nacionalidade da mãe:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="nacionalidade_mae" 
                id="nacionalidade_mae"
                value="<?= $paciente->nacionalidade_mae ?>"
                placeholder="Nacionalidade da Mãe"/>
            <br><br>
            <label class="textformat">
            Digite seu celular:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="contato" 
                id="contato"
                value="<?= $paciente->contato ?>"
                placeholder="Celular"/>
            <br><br>
            <label class="textformat">
            Digite seu CEP:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="CEP" 
                id="CEP"
                value="<?= $paciente->cep ?>"
                placeholder="Cep"
                maxlength="8"/>
            <br><br>
            <label class="textformat">
            Digite o nome da rua:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="rua" 
                id="rua"
                value="<?= $paciente->rua ?>"
                placeholder="Endereço"/>
            <br><br>
            <label class="textformat">
            Digite o número do seu endereço:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="numero_endereco" 
                id="numero_endereco"
                value="<?= $paciente->numero ?>"
                placeholder="Nº"/>
            <br><br>
            <label class="textformat">
            Digite o complemento do seu endereço:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="complemento" 
                id="complemento"
                value="<?= $paciente->complemento ?>"
                placeholder="Complemento"/>
            <br><br>
            <label class="textformat">
            Digite o bairro:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="bairro" 
                id="bairro"
                value="<?= $paciente->bairro ?>"
                placeholder="Bairro"/>
            <br><br>
            <label class="textformat">
            Digite a cidade:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="cidade_endereco" 
                id="cidade_endereco"
                value="<?= $paciente->cidade ?>"
                placeholder="Cidade"/>
            <br><br>
            <label class="textformat">
            Digite o estado:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="estado" 
                id="estado"
                value="<?= $paciente->estado ?>"
                placeholder="Estado"/>
            <br><br>
            <input type="hidden" id="paciente_id" name="paciente_id" value="<?= $paciente->id ?>">
            <!-- botão submit-->
            <div>
                <input class="submit" type="submit" value="Cadastrar">
            </div>
            <br><br>
        </div>
    </form>
    <!-- fim formulario -->
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>