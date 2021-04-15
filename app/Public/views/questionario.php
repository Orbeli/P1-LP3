<?php require_once 'layouts/base.php'; ?>
<!-- Content Section -->
   <form method="post" action="/Http/Controller/QuestionarioController.php?acao=inserir">
      <div class="controlacontainer firstcont">
         <h4>
            Ficha de Saúde
         </h4>
         <label>Cadastro</label>
         <input
            class="text"
            type="text"
            id="Id"
            name="paciente_id"
            placeholder="Nº de ID..."
            required
            />
         <div>
            <div>
               <label>Principal Queixa</label>
               <input 
                  type="text"
                  id="Queixa"
                  name="queixa"
                  placeholder="Dor local, febre, incomodo..."/>
            </div>
            <div>
               <label
                  class="exibetitulo">
               Histórico do Atual Tratamento</label>
               <input class="text"
                  type="text"
                  id="Hist"
                  name="historico"
                  placeholder="Recuperação, medicamentos..."/>
               </label>
            </div>
         </div>
      </div>
      <div>
         <div class="controlacontainer firstcont">
            <h4 class="exibetitulo"> 
               Questionário de Saúde da Criança de do Adulto
            </h4>
            <div>
               <label>1- Já teve hemorragia?</label>
               <div>
                  <input type="radio" name="hemorragia" value="Sim"> Sim</input>
               </div>
               <div>
                  <input type="radio" name="hemorragia" value="Não"> Não</input>
               </div>
               <label>2- Sofre(u) de alergia?</label>
               <div>
                  <input type="radio" name="alergia" value="Sim"> Sim</input>
               </div>
               <div>
                  <input type="radio" name="alergia" value="Não"> Não</input>
               </div>
               <label>3- Teve reumatismo infeccioso?</label>
               <div>
                  <input type="radio" name="reumatismo" value="Sim"> Sim</input>
               </div>
               <div>
                  <input type="radio" name="reumatismo" value="Não"> Não</input>
               </div>
               <label>4- Sofre(u) de distúrbio cardiovascular?</label>
               <div>
                  <input type="radio" name="disturbio_cardiovascular" value="Sim"> Sim</input>
               </div>
               <div>
                  <input type="radio" name="disturbio_cardiovascular" value="Não"> Não</input>
               </div>
               <label>5- Sofre(u) de gastrite?</label>
               <div>
                  <input type="radio" name="gastrite" value="Sim"> Sim</input>
               </div>
               <div>
                  <input type="radio" name="gastrite" value="Não"> Não</input>
               </div>
               <label>6- É diabético ou tem familiares diabéticos?</label>
               <div>
                  <input type="radio" name="diabetico" value="Sim" > Sim
               </div>
               <div>
                  <input type="radio" name="diabetico" value="Não"> Não
               </div>
            </div>
            <div>
               <label>7- Já desmaiou alguma vez?</label>
               <div>
                  <input type="radio" name="desmaio" value="Sim"> Sim
               </div>
               <div>
                  <input type="radio" name="desmaio" value="Não"> Não
               </div>
               <label>8- Está sob tratamento médico?</label>
               <div>
                  <input type="radio" name="tratamento" value="Sim"> Sim
               </div>
               <div>
                  <input type="radio" name="tratamento" value="Não"> Não
               </div>
               <label>9- Está tomando algum medicamento?</label>
               <div>
                  <input type="radio" name="medicamento" value="Sim"> Sim
               </div>
               <div>
                  <input type="radio" name="medicamento" value="Não"> Não
               </div>
               <label>10- Esteve doente ou foi operado nos últimos 5 anos?</label>
               <div>
                  <input type="radio" name="doenca_operacao" value="Sim"> Sim
               </div>
               <div>
                  <input type="radio" name="doenca_operacao" value="Não"> Não
               </div>
               <label>11- Tem hábitos, vícios ou manias?</label>
               <div>
                  <input type="radio" name="vicios" value="Sim"> Sim
               </div>
               <div>
                  <input type="radio" name="vicios" value="Não"> Não
               </div>
               <label>12- Tem ansiedade/depressão?</label>
               <div>
                  <input type="radio" name="ansiedade_depressao" value="Sim"> Sim
               </div>
               <div>
                  <input type="radio" name="ansiedade_depressao" value="Não"> Não
               </div>
            </div>
         </div>
      </div>
      <div>
         <div class="controlacontainer firstcont">
            <h4 class="exibetitulo"> 
               13 -	Você e/ou algum familiar  teve algumas dessas doenças?
            </h4>
            <label>Tuberculose</label>
            <div>
               <input type="radio" name="tuberculose" value="Sim"> Sim
            </div>
            <div>
               <input type="radio" name="tuberculose" value="Não"> Não
            </div>
            <label>Sífilis</label>
            <div>
               <input type="radio" name="sifilis" value="Sim"> Sim
            </div>
            <div>
               <input type="radio" name="sifilis" value="Não"> Não
            </div>
            <label>Hepatite A, B, C</label>
            <div>
               <input type="radio" name="hepatite" value="Sim"> Sim
            </div>
            <div>
               <input type="radio" name="hepatite" value="Não"> Não
            </div>
            <label>SIDA/AIDS</label>
            <div>
               <input type="radio" name="aids" value="Sim"> Sim
            </div>
            <div>
               <input type="radio" name="aids" value="Não"> Não                            
            </div>
            <label >Sarampo</label>
            <div>
               <input type="radio" name="sarampo" value="Sim"> Sim
            </div>
            <div>
               <input type="radio" name="sarampo" value="Não"> Não
            </div>
            <label>Caxumba</label>
            <div>
               <input type="radio" name="caxumba" value="Sim"> Sim
            </div>
            <div>
               <input type="radio" name="caxumba" value="Não"> Não
            </div>
            <div>
               <label>Varicela</label>
               <div>
                  <input type="radio" name="varicela" value="Sim"> Sim
               </div>
               <div>
                  <input type="radio" name="varicela" value="Não"> Não
               </div>
               <div>
                  <label>Outras                                        
                  <input type="text" id="outros" name="other"/></label>  
               </div>
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
                  <label>14-	É fumante?</label>                                       
                  <input type="radio" name="fumante" value="Sim"> Sim
                  <input type="radio" name="fumante" value="Não"> Não
                  <br>
                  <label>Qual a frequência?</label>
                  <input type="text" 
                     id="freq"
                     class="mask-dois-n"
                     name="frequencia"/> /dia
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo"> 
                  Questionário Infantil - Odontopediatria
               </h4>
               <label>Histórico Gestacional</label>
               <input type="text" id="gestacional" name="gestacional" />
               <div>
                  <label>Nasceu de Parto</label>
                  <input type="radio" name="parto" value="Normal"> Normal
                  <input type="radio" name="parto" value="Forceps"> A fórceps
                  <input type="radio" name="parto" value="Cesariana"> Cesariana   
               </div>
               <div>
                  <label>Problemas Durante o Parto?</label>
                  <input type="radio" name="problemas_parto" value="Sim"> Sim
                  <input type="radio" name="problemas_parto" value="Não"> Não    
               </div>
               <div>
                  <label>A amamentação foi:</label>
                  <input type="radio" name="tipo_amamentacao" value="Natural"> Natural
                  <input type="radio" name="tipo_amamentacao" value="Mamadeira"> Mamadeira 
                  <br>
                  <label>até a idade de:</label><input type="text" id="amament" class="mask-dois-n" name="idade_amamentacao" />
               </div>
               <div>
                  <label>Já lhe foi dito para não tomar anestesia local?</label>
                  <input type="radio" name="anestesia" value="Sim"> Sim
                  <input type="radio" name="anestesia" value="Não"> Não 
               </div>
               <div>
                  <label>Já teve ou viveu com alguém que tivesse doença grave e contagiosa?</label>  
                  <input type="radio" name="doencao_contagiosa" value="Sim"> Sim
                  <input type="radio" name="doencao_contagiosa" value="Não"> Não 
               </div>
               <div>
                  <label>A criança já foi vacinada? </label>
                  <input type="radio" name="vacinada" value="Sim"> Sim
                  <input type="radio" name="vacinada" value="Não"> Não 
               </div>
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 >Conduta da Criança</h4>
               <div>
                  <label>Durante os primeiros 2 anos de vida a criança: </label>
                  <br>
                  Sentou-se<input type="checkbox" name="sentou" value="Sim" />
                  Engatinhou<input type="checkbox" name="engatinhou" value="Sim" />
                  Andou<input type="checkbox" name="andou" value="Sim" />
                  Falou<input type="checkbox" name="falou" value="Sim" />
               </div>
               <div>
                  <label>No lar e na escola a criança apresentou alguma dificuldade no aprendizado? </label>
                  <br>
                  <input  type="radio" name="dificuldade_aprendizado" value="Sim"> Sim
                  <input  type="radio" name="dificuldade_aprendizado" value="Não"> Não 
               </div>
               <div>
                  <label>Estado Anímico:</label>
                  <br>
                  <input type="radio" name="humor" value="Alegre"> Alegre
                  <input type="radio" name="humor" value="Triste"> Triste
                  <input type="radio" name="humor" value="Timido"> Tímido 
                  <input type="radio" name="humor" value="Tranquilo"> Tranquilo
                  <input type="radio" name="humor" value="Inquieto"> Inquieto 
                  <input type="radio" name="humor" value="Assustado"> Assustado
               </div>
               <div>
                  <br>
                  <label>Tem o sono: </label>
                  <br>
                  <input type="radio" name="sono" value="Tranquilo"> Tranquilo
                  <input type="radio" name="sono" value="Intranquilo"> Intranquilo  
                  <input type="radio" name="sono" value="Terror"> Terror noturno 
                  <input type="radio" name="sono" value="Pesadelos"> Pesadelos  
                  <input type="radio" name="sono" value="Sonambulismo"> Sonambulismo  
                  <input type="radio" name="sono" value="Insonia"> Insônia 
               </div>
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo"> 
                  Conduta Psicomotora
               </h4>
               <input type="radio" name="postura_normal" value="Sim"> Postura normal
               <input type="radio" name="fala_normal" value="Sim"> Fonação normal 
               <input type="checkbox" name="paralisia" value="Sim"> Alguma paralisia
               <input type="checkbox" name="enurese" value="Sim"> Enurese noturna
               <input type="checkbox" name="esfincteres" value="Sim"> Descontrole dos esfíncteres
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo"> 
                  Alimentação
               </h4>
               <label>
                  <div>
                     <input type="radio" name="alimentacao" value="Rejeita Alimentação"> Rejeita 
                  </div>
                  <div>
                     <input type="radio" name="alimentacao" value="Alimenta-se Normalmente"> Alimenta-se normalmente
                  </div>
                  <div>
                     <input type="radio" name="alimentacao" value="Supra Alimenta-se"> Supra alimenta-se
                  </div>
               </label>
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo">
                  Sociabilidade
               </h4>
               <label>
                  <div>
                     <input type="radio" name="sociabilidade" value="Isolada"> Isolada
                  </div>
                  <div>
                     <input type="radio" name="sociabilidade" value="Agressiva"> Agressiva
                  </div>
                  <div>
                     <input type="radio" name="sociabilidade" value="RelNormais"> Relações Normais
                  </div>
               </label>
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo">
                  Apresenta alguma patologia de conduta?
               </h4>
               Tiques<input type="checkbox" name="tique" value="Sim" />

               Fobias<input type="checkbox" name="fobia" value="Sim" />

               Ansiedade<input type="checkbox" name="ansiedade" value="Sim" />

               Medo<input type="checkbox" name="medo" value="Sim" />

               Birra<input type="checkbox" name="birra" value="Sim" />

               Ciúmes<input type="checkbox" name="ciume" value="Sim" />

            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo">
                  <div>
                     Observações:
               </h4>
               <label><input type="text" id="observacoes" name="observacoes" /></label>
               <br>                   
               <label>Aluno(s)<br><input type="text" id="aluno" name="alunos"/></label><label>Professor Responsável:<input type="text" id="professor" name="professor"/></label>
               </div>    
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo">
                  Exame Físico
               </h4>
               <div>
                  <label>Lábio</label>
                  <div>
                     <input type="radio" name="labio" value="Sim"> Normal
                     <input type="radio" name="labio" value="Alterado"> Alterado
                  </div>
                  <label>Mucosa Jugal</label>
                  <div>
                     <input type="radio" name="mucosa" value="Sim"> Normal
                     <input type="radio" name="mucosa" value="Não"> Alterado
                  </div>
                  <label>Língua</label>
                  <div>
                     <input type="radio" name="lingua" value="Sim"> Normal
                     <input type="radio" name="lingua" value="Não"> Alterado
                  </div>
                  <label>Soalho da boca</label>
                  <div>
                     <input type="radio" name="soalho" value="Sim"> Normal
                     <input type="radio" name="soalho" value="Não"> Alterado
                  </div>
                  <label>Palato Duro</label>
                  <div>
                     <input type="radio" name="palato_duro" value="Sim"> Normal
                     <input type="radio" name="palato_duro" value="Não"> Alterado
                  </div>
                  <label>Garganta</label>
                  <div>
                     <input type="radio" name="garganta" value="Sim"> Normal
                     <input type="radio" name="garganta" value="Não"> Alterado
                  </div>
                  <label>Palato Mole</label>
                  <div>
                     <input type="radio" name="palato_mole" value="Sim"> Normal
                     <input type="radio" name="palato_mole" value="Não"> Alterado
                  </div>
               </div>
               <div>
                  <label>Mucosa Alveolar</label> 
                  <div>
                     <input type="radio" name="alveolar" value="Sim"> Normal
                     <input type="radio" name="alveolar" value="Não"> Alterado
                  </div>
                  <label>Gengivas</label>
                  <div>
                     <input type="radio" name="gengiva" value="Sim"> Normal
                     <input type="radio" name="gengiva" value="Não"> Alterado
                  </div>
                  <label>Glândulas Salivares</label>
                  <div>
                     <input type="radio" name="salivar" value="Sim"> Normal
                     <input type="radio" name="salivar" value="Não"> Alterado
                  </div>
                  <label>Linfonodos</label>
                  <div>
                     <input type="radio" name="linfonodos" value="Sim"> Normal
                     <input type="radio" name="linfonodos" value="Não"> Alterado
                  </div>
                  <label>ATM</label>
                  <div>
                     <input type="radio" name="atm" value="Sim"> Normal
                     <input type="radio" name="atm" value="Não"> Alterado
                  </div>
                  <label>Músculos Mastigadores</label>
                  <div>
                     <input type="radio" name="mastigadores" value="Sim"> Normal
                     <input type="radio" name="mastigadores" value="Não"> Alterado
                  </div>
               </div>
               <div>
                  <label>Oclusão</label>
                  <div>
                     <input type="radio" name="oclusao" value="Sim"> Normal
                     <input type="radio" name="oclusao" value="Não"> Alterado
                  </div>
               </div>
            </div>
         </div>
         <div>
            <div class="controlacontainer">
               <h4> Anotações Gerais</h4>
               <br>
               <label>Alterações Encontradas:</label>
               <input  type="text" 
                  id="altera" 
                  name="alteracoes"
                  required
                  />
               <br>
               <label>Pressão Arterial Máxima:</label>
               <input  type="text" 
                  id="pamax" 
                  name="pamax"
                  class="mask-tres-n"
                  placeholder="em mmgH"
                  required
                  />
               <br>
               <label>Pressão Arterial Mínima:</label>
               <input  
                  type="text" 
                  id="pamin" 
                  name="pamin" 
                  class="mask-tres-n" 
                  placeholder="em mmgH"
                  />
               <br>
               <label>Diagnóstico Presuntivo:</label>
               <input  
                  type="text" 
                  id="presuntivo" 
                  name="presuntivo"
                  required
                  />
               <br>
               <label>Exames Complementares:</label>
               <input  type="text"
                  id="complementares" 
                  name="complementares"
                  required
                  />
               <br>
               <label>Diagnóstico Definitivo:</label>
               <input  type="text" id="definitivo" name="definitivo"/>
               <br>
               <label> Tratamento/Proservação:</label>
               <input  type="text" 
                  id="proservacao" 
                  name="proservacao"
                  required
                  />  
               <br>
               <label>Plano de Tratamento:</label>
               <input  type="text" 
                  id="plano" 
                  name="plano"
                  required
                  />
               <br>
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo"> 
                  Responsáveis pelo Tratamento
               </h4>
               <label>Aluno(s)<input
                  type="text"
                  id="alunos_exame"
                  name="alunos_exame"/>
               </label>
               <label>Professor Responsável:<input
                  type="text"
                  id="professor_exame"
                  name="professor_exame"/>
               </label>
            </div>
         </div>
         <div class="col-md-12 btnsub">
            <input class="submit" type="submit" value="Salvar">
         </div>
   </form>
<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>