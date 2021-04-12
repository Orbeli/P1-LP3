<?php require_once 'layouts/base.php'; ?>

 <!-- Adicionando Javascript -->
 <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade_endereco').value=("");
            document.getElementById('estado_endereco').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade_endereco').value=(conteudo.localidade);
            document.getElementById('estado_endereco').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade_endereco').value="...";
                document.getElementById('estado_endereco').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

<!-- Content Section -->
<div class="content col-md-12">
    <form method="post" action="/Http/Controller/PacienteController.php?acao=inserir">
        <div id="containerform">
            <!-- inicio formulario -->
            <br>
            <div class="label-float">
                    <input type="text" 
                    placeholder=" " 
                    type="text"
                    name="nome"
                    id="nome"
                    required/>
                    <label>Nome de Usuário</label>
            </div>
            
            <div class="label-float">
                <input type="text"
                placeholder=" "
                name="contato" 
                id="contato" />
                <label>Telefone</label>
            </div>
    
            <label>
            Data de Nascimento:
            </label> <br>
            <input 
                type="date"
                name="data_nasc"
                id="data_nasc"
                placeholder="Data de nascimento"/>
            <br><br>
            <label for="sexo">
            Selecione seu sexo:
            </label>
            <select name="sexo" id="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
            <br>
            <div class="label-float">
                <input type="text" 
                class="boxtext" 
                type="text" 
                name="peso" 
                id="peso" 
                placeholder="Peso em Kg"
                />
                <label>Peso</label>
            </div>
       
            <div class="label-float">
                <input type="text" 
                type="text" 
                name="altura" 
                id="altura" 
                placeholder="Altura em metros"
                />
                <label>Altura:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                type="text" 
                name="cor" 
                id="cor" 
                placeholder="Digite sua cor (Branco, pardo ou negro)"
                required
                />
                <label>Digite sua Cor:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                name="escolaridade" 
                id="escolaridade" 
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
                id="cpf" 
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
                placeholder="Naturalidade"
                required
                />
                <label>Digite sua Naturalidade:</label>
            </div>


            <div class="label-float">
                <input type="text" 
                type="text" 
                name="contato" 
                id="contato" 
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
                required
                />
                <label> Digite o nome do pai:</label>
            </div>
            
               <div class="label-float">
                <input type="text" 
                type="text"  
                name="nacionalidade_pai" 
                id="nacionalidade_pai" 
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
                placeholder="Nacionalidade da Mãe"
                required
                />
                <label>Digite a nacionalidade da mãe:</label>
            </div>

            <div class="label-float">
                <input type="text" 
                onblur="pesquisacep(this.value)"; 
                name="CEP" 
                id="CEP" 
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
                placeholder="Endereço"
                required
                />
                <label>Nome da rua:</label>
            </div>

            <div class="label-float">
                <input type="text"  
                name="numero_endereco" 
                id="numero_endereco" 
                placeholder="Nº"
                required
                />
                <label>Número do seu endereço:</label>
            </div>
            
            <div class="label-float">
                <input type="text"  
                name="complemento" 
                id="complemento" 
                placeholder="Complemento"
                />
                <label>Complemento:</label>
            </div>

            <div class="label-float">
                <input type="text"  
                name="bairro" 
                id="bairro" 
                placeholder="Bairro"
                required
                />
                <label>Bairro:</label>
            </div>

            <div class="label-float">
                <input type="text"  
                name="cidade_endereco" 
                id="cidade_endereco" 
                placeholder="Cidade"
                required
                />
                <label>Cidade:</label>
            </div>

            <div class="label-float">
                <input type="text"  
                name="estado_endereco" 
                id="estado_endereco" 
                placeholder="Estado"
                required
                />
                <label>Estado:</label>
            </div>
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