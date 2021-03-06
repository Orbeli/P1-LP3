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
            <div class="label-float">
                    <input type="text" 
                    placeholder=" " 
                    type="text"
                    name="nome"
                    id="nome"
                    value="<?= $paciente->nome ?>"
                    required/>
                    <label>Nome de Usuário</label>
            </div>

            <label>
            Data de Nascimento:
            </label> <br>
            <input 
                type="date"
                name="data_nasc"
                id="datepicker"
                value="<?= $paciente->data_nasc ?>"
                placeholder="Data de nascimento"/>
            <br><br>
            <label for="sexo">
            Selecione seu sexo:
            </label>
            <select name="sexo" id="sexo">
                <option value="Masculino" <?= $paciente->sexo == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
                <option value="Feminino" <?= $paciente->sexo == 'Feminino' ? 'selected' : '' ?>>Feminino</option>
                <option value="Outro" <?= $paciente->sexo == 'Outro' ? 'selected' : '' ?>>Outro</option>
            </select>
            <br>
            <div class="label-float">
                <input type="text" 
                class="boxtext" 
                type="text" 
                name="peso"
                id="peso"
                value="<?= $paciente->peso ?>"
                placeholder="Peso em Kg"
                />
                <label>Peso</label>
            </div>
       
            <div class="label-float">
                <input type="text" 
                type="text" 
                name="altura" 
                id="altura"
                value="<?= $paciente->altura ?>"
                placeholder="Altura em metros"
                />
                <label>Altura:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                type="text" 
                name="cor" 
                id="cor"
                value="<?= $paciente->cor ?>"
                placeholder="Digite sua cor (Branco, pardo ou negro)"
                required
                />
                <label>Digite sua Cor:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                name="escolaridade" 
                id="escolaridade"
                value="<?= $paciente->escolaridade ?>"
                placeholder="Escolaridade"
                required
                />
                <label>Digite sua escolaridade:</label>
            </div>
            

            <div class="label-float">
                <input type="text" 
                type="text" 
                name="profissao" 
                id="profissao"
                value="<?= $paciente->profissao ?>"
                placeholder="Profissão"
                required
                />
                <label>Digite sua profissão:</label>
            </div>


            <div class="label-float">
                <input type="text" 
                type="text" 
                name="rg" 
                id="rg"
                class="rg"
                value="<?= $paciente->rg ?>"
                pattern="(^\d{1,2}).?(\d{3}).?(\d{3})-?(\d{1}|X|x$)"
                placeholder="RG: 00.000.000-0"
                maxLength="9"
                required
                />
                <label>Digite seu RG:</label>
            </div>

            <div class="label-float">
                <input type="text"  
                name="cpf" 
                value="<?= $paciente->cpf ?>"
                id="cpf"
                class="cpf"
                pattern="^(\d{2}\.?\d{3}\.?\d{3}\/?\d{4}-?\d{2}|\d{3}\.?\d{3}\.?\d{3}-?\d{2})$"
                placeholder="CPF: 000.000.000-00"
                maxlength="15"
                required
                />
                <label> Digite seu CPF:</label>
            </div>
            
            <div class="label-float">
                <input type="text" 
                type="text" 
                name="estado_civil" 
                id="estado_civil"
                value="<?= $paciente->estado_civil ?>"
                placeholder="Estado civil"
                required
                />
                <label>Digite seu estado civil:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                type="text" 
                name="naturalidade" 
                id="naturalidade"
                value="<?= $paciente->naturalidade ?>"
                placeholder="Naturalidade"
                required
                />
                <label>Digite sua Naturalidade:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                type="text" 
                name="estado_nasc" 
                id="estado_nasc"
                value="<?= $paciente->estado_nasc ?>"
                placeholder="Estado"
                required
                />
                <label>Digite seu Estado em que nasceu:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                type="text" 
                name="contato" 
                id="contato"
                class="contato"
                value="<?= $paciente->contato ?>" 
                placeholder="(99)99999-9999"
                required
                />
                <label> Digite seu celular:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                type="text" 
                name="nome_pai" 
                placeholder="Nome do Pai"
                id="nome_pai"
                value="<?= $paciente->nome_pai ?>" 
                required
                />
                <label> Digite o nome do pai:</label>
            </div>
            
            <div class="label-float">
                <input type="text" 
                type="text"  
                name="nacionalidade_pai" 
                id="nacionalidade_pai"
                value="<?= $paciente->nacionalidade_pai ?>"
                placeholder="Nacionalidade do Pai"
                required
                />
                <label>  Digite a nacionalidade do pai:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                type="text" 
                name="nome_mae" 
                id="nome_mae"
                value="<?= $paciente->nome_mae ?>"
                placeholder="Nome da Mãe"
                required
                />
                <label>Digite o nome da mãe:</label>
            </div>
            
            <div class="label-float">
                <input type="text" 
                type="text" 
                name="nacionalidade_mae" 
                id="nacionalidade_mae"
                value="<?= $paciente->nacionalidade_mae ?>"
                placeholder="Nacionalidade da Mãe"
                required
                />
                <label>Digite a nacionalidade da mãe:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                name="CEP" 
                id="CEP"
                class="cep"
                value="<?= $paciente->cep ?>"
                placeholder="Cep"
                maxlength="9"
                required
                />
                <label>Digite seu CEP:</label>
            </div>

            <div class="label-float">
                <input type="text"  
                name="rua" 
                id="rua"
                value="<?= $paciente->rua ?>"
                placeholder="Endereço"
                required
                />
                <label>Nome da rua:</label>
            </div>

            <div class="label-float">
                <input type="text"  
                name="numero_endereco" 
                id="numero_endereco"
                class="numero_endereco"
                value="<?= $paciente->numero ?>"
                placeholder="Nº"
                required
                />
                <label>Número do seu endereço:</label>
            </div>
            
            <div class="label-float">
                <input type="text"  
                name="complemento" 
                id="complemento"
                value="<?= $paciente->complemento ?>"
                placeholder="Complemento"
                />
                <label>Complemento:</label>
            </div>

            <div class="label-float">
                <input type="text"  
                name="bairro" 
                id="bairro"
                value="<?= $paciente->bairro ?>"
                placeholder="Bairro"
                required
                />
                <label>Bairro:</label>
            </div>

            <div class="label-float">
                <input type="text"  
                name="cidade_endereco" 
                id="cidade_endereco"
                value="<?= $paciente->cidade ?>"
                placeholder="Cidade"
                required
                />
                <label>Cidade:</label>
            </div>

            <div class="label-float">
                <input type="text"  
                name="estado" 
                id="estado"
                value="<?= $paciente->estado ?>"
                placeholder="Estado"
                required
                />
                <label>Estado:</label>
            </div>

            <input type="hidden" name="id" value="<?= $paciente->id ?>">
            <br>
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