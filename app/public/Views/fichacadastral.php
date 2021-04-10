<?php require_once 'layouts/base.php'; ?>

<!-- Content Section -->
<div class="content col-md-12">
    <form method="post" action="/Http/Controller/PacienteController.php?acao=inserir">
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
                placeholder="Naturalidade"/>
            <br><br>
            <label class="textformat">
            Digite o estado:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="estado" 
                id="estado" 
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
                placeholder="Cidade"/>
            <br><br>
            <label class="textformat">
            Digite o estado:
            </label><br>
            <input
                class="boxtext" 
                type="text" 
                name="estado_endereco" 
                id="estado_endereco" 
                placeholder="Estado"/>
            <br><br>
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