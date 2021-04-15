<?php
   $acao = 'recuperar';
   require_once '../../Http/Controller/QuestionarioController.php';
   require_once 'layouts/base.php';
   if (isset($questionario->id)) {
      $acao = 'atualizar';
   } else {
      $acao = 'inserir';
   }
?>
<!-- Content Section -->
   <form method="post" action="/Http/Controller/QuestionarioController.php?acao=<?= $acao ?>">
      <div class="controlacontainer firstcont">
         <h4>
            Ficha de Saúde
         </h4>
         <label>Cadastro</label>
         <input
            class="text"
            type="hidden"
            id="Id"
            value="<?= $_GET['paciente'] ?>"
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
                  value="<?= $questionario->queixa ?>"
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
                  value="<?= $questionario->historico ?>"
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
                  <input type="radio" name="hemorragia" value="Sim" <?= $questionario->hemorragia == 1 ? 'checked' : '' ?>> Sim</input>
               </div>
               <div>
                  <input type="radio" name="hemorragia" value="Não" <?= $questionario->hemorragia === False ? 'checked' : '' ?>> Não</input>
               </div>
               <label>2- Sofre(u) de alergia?</label>
               <div>
                  <input type="radio" name="alergia" value="Sim" <?= $questionario->alergia == 1 ? 'checked' : '' ?>> Sim</input>
               </div>
               <div>
                  <input type="radio" name="alergia" value="Não" <?= $questionario->alergia === False ? 'checked' : '' ?>> Não</input>
               </div>
               <label>3- Teve reumatismo infeccioso?</label>
               <div>
                  <input type="radio" name="reumatismo" value="Sim" <?= $questionario->reumatismo == 1 ? 'checked' : '' ?>> Sim</input>
               </div>
               <div>
                  <input type="radio" name="reumatismo" value="Não" <?= $questionario->reumatismo === False ? 'checked' : '' ?>> Não</input>
               </div>
               <label>4- Sofre(u) de distúrbio cardiovascular?</label>
               <div>
                  <input type="radio" name="disturbio_cardiovascular" value="Sim" <?= $questionario->disturbio_cardiovascular == 1 ? 'checked' : '' ?>> Sim</input>
               </div>
               <div>
                  <input type="radio" name="disturbio_cardiovascular" value="Não" <?= $questionario->disturbio_cardiovascular === False ? 'checked' : '' ?>> Não</input>
               </div>
               <label>5- Sofre(u) de gastrite?</label>
               <div>
                  <input type="radio" name="gastrite" value="Sim" <?= $questionario->gastrite == 1 ? 'checked' : '' ?>> Sim</input>
               </div>
               <div>
                  <input type="radio" name="gastrite" value="Não" <?= $questionario->gastrite === False ? 'checked' : '' ?>> Não</input>
               </div>
               <label>6- É diabético ou tem familiares diabéticos?</label>
               <div>
                  <input type="radio" name="diabetico" value="Sim" <?= $questionario->diabetico == 1 ? 'checked' : '' ?>> Sim
               </div>
               <div>
                  <input type="radio" name="diabetico" value="Não" <?= $questionario->diabetico === False ? 'checked' : '' ?>> Não
               </div>
            </div>
            <div>
               <label>7- Já desmaiou alguma vez?</label>
               <div>
                  <input type="radio" name="desmaio" value="Sim" <?= $questionario->desmaio == 1 ? 'checked' : '' ?>> Sim
               </div>
               <div>
                  <input type="radio" name="desmaio" value="Não" <?= $questionario->desmaio === False ? 'checked' : '' ?>> Não
               </div>
               <label>8- Está sob tratamento médico?</label>
               <div>
                  <input type="radio" name="tratamento" value="Sim" <?= $questionario->tratamento == 1 ? 'checked' : '' ?>> Sim
               </div>
               <div>
                  <input type="radio" name="tratamento" value="Não" <?= $questionario->tratamento === False ? 'checked' : '' ?>> Não
               </div>
               <label>9- Está tomando algum medicamento?</label>
               <div>
                  <input type="radio" name="medicamento" value="Sim" <?= $questionario->medicamento == 1 ? 'checked' : '' ?>> Sim
               </div>
               <div>
                  <input type="radio" name="medicamento" value="Não" <?= $questionario->medicamento === False ? 'checked' : '' ?>> Não
               </div>
               <label>10- Esteve doente ou foi operado nos últimos 5 anos?</label>
               <div>
                  <input type="radio" name="doenca_operacao" value="Sim" <?= $questionario->doenca_operacao == 1 ? 'checked' : '' ?>> Sim
               </div>
               <div>
                  <input type="radio" name="doenca_operacao" value="Não" <?= $questionario->doenca_operacao === False ? 'checked' : '' ?>> Não
               </div>
               <label>11- Tem hábitos, vícios ou manias?</label>
               <div>
                  <input type="radio" name="vicios" value="Sim" <?= $questionario->vicios == 1 ? 'checked' : '' ?>> Sim
               </div>
               <div>
                  <input type="radio" name="vicios" value="Não" <?= $questionario->vicios === False ? 'checked' : '' ?>> Não
               </div>
               <label>12- Tem ansiedade/depressão?</label>
               <div>
                  <input type="radio" name="ansiedade_depressao" value="Sim" <?= $questionario->ansiedade_depressao == 1 ? 'checked' : '' ?>> Sim
               </div>
               <div>
                  <input type="radio" name="ansiedade_depressao" value="Não" <?= $questionario->ansiedade_depressao === False ? 'checked' : '' ?>> Não
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
               <input type="radio" name="tuberculose" value="Sim" <?= $questionario->tuberculose == 1 ? 'checked' : '' ?>> Sim
            </div>
            <div>
               <input type="radio" name="tuberculose" value="Não" <?= $questionario->tuberculose === False ? 'checked' : '' ?>> Não
            </div>
            <label>Sífilis</label>
            <div>
               <input type="radio" name="sifilis" value="Sim" <?= $questionario->sifilis == 1 ? 'checked' : '' ?>> Sim
            </div>
            <div>
               <input type="radio" name="sifilis" value="Não" <?= $questionario->sifilis === False ? 'checked' : '' ?>> Não
            </div>
            <label>Hepatite A, B, C</label>
            <div>
               <input type="radio" name="hepatite" value="Sim" <?= $questionario->hepatite == 1 ? 'checked' : '' ?>> Sim
            </div>
            <div>
               <input type="radio" name="hepatite" value="Não" <?= $questionario->hepatite === False ? 'checked' : '' ?>> Não
            </div>
            <label>SIDA/AIDS</label>
            <div>
               <input type="radio" name="aids" value="Sim" <?= $questionario->aids == 1 ? 'checked' : '' ?>> Sim
            </div>
            <div>
               <input type="radio" name="aids" value="Não" <?= $questionario->aids === False ? 'checked' : '' ?>> Não                            
            </div>
            <label >Sarampo</label>
            <div>
               <input type="radio" name="sarampo" value="Sim" <?= $questionario->sarampo == 1 ? 'checked' : '' ?>> Sim
            </div>
            <div>
               <input type="radio" name="sarampo" value="Não" <?= $questionario->sarampo === False ? 'checked' : '' ?>> Não
            </div>
            <label>Caxumba</label>
            <div>
               <input type="radio" name="caxumba" value="Sim" <?= $questionario->caxumba == 1 ? 'checked' : '' ?>> Sim
            </div>
            <div>
               <input type="radio" name="caxumba" value="Não" <?= $questionario->caxumba === False ? 'checked' : '' ?>> Não
            </div>
            <div>
               <label>Varicela</label>
               <div>
                  <input type="radio" name="varicela" value="Sim" <?= $questionario->varicela == 1 ? 'checked' : '' ?>> Sim
               </div>
               <div>
                  <input type="radio" name="varicela" value="Não" <?= $questionario->varicela === False ? 'checked' : '' ?>> Não
               </div>
               <div>
                  <label>Outras                                        
                  <input type="text" id="outros" name="outros" value="<?= $questionario->outros ?>" /></label>  
               </div>
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
                  <label>14-	É fumante?</label>                                       
                  <input type="radio" name="fumante" value="Sim" <?= $questionario->fumante == 1 ? 'checked' : '' ?>> Sim
                  <input type="radio" name="fumante" value="Não" <?= $questionario->fumante === False ? 'checked' : '' ?>> Não
                  <br>
                  <label>Qual a frequência?</label>
                  <input type="text" 
                     id="freq"
                     class="mask-dois-n"
                     value="<?= $questionario->frequencia ?>"
                     name="frequencia"/> /dia
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo"> 
                  Questionário Infantil - Odontopediatria
               </h4>
               <label>Histórico Gestacional</label>
               <input type="text" id="gestacional" name="gestacional" value="<?= $questionario->gestacional ?>"/>
               <div>
                  <label>Nasceu de Parto</label>
                  <input type="radio" name="parto" value="Normal" <?= $questionario->parto == 'Normal' ? 'checked' : '' ?>> Normal
                  <input type="radio" name="parto" value="Forceps" <?= $questionario->parto == 'Forceps' ? 'checked' : '' ?>> A fórceps
                  <input type="radio" name="parto" value="Cesariana" <?= $questionario->parto == 'Cesariana' ? 'checked' : '' ?>> Cesariana   
               </div>
               <div>
                  <label>Problemas Durante o Parto?</label>
                  <input type="radio" name="problemas_parto" value="Sim" <?= $questionario->problemas_parto == 1 ? 'checked' : '' ?>> Sim
                  <input type="radio" name="problemas_parto" value="Não" <?= $questionario->problemas_parto === False ? 'checked' : '' ?>> Não    
               </div>
               <div>
                  <label>A amamentação foi:</label>
                  <input type="radio" name="tipo_amamentacao" value="Natural" <?= $questionario->tipo_amamentacao == 'Natural' ? 'checked' : '' ?>> Natural
                  <input type="radio" name="tipo_amamentacao" value="Mamadeira" <?= $questionario->tipo_amamentacao == 'Mamadeira' ? 'checked' : '' ?>> Mamadeira 
                  <br>
                  <label>até a idade de:</label><input type="text" id="amament" value="<?= $questionario->idade_amamentacao ?>" class="mask-dois-n" name="idade_amamentacao" />
               </div>
               <div>
                  <label>Já lhe foi dito para não tomar anestesia local?</label>
                  <input type="radio" name="anestesia" value="Sim" <?= $questionario->anestesia == 1 ? 'checked' : '' ?>> Sim
                  <input type="radio" name="anestesia" value="Não" <?= $questionario->anestesia === False ? 'checked' : '' ?>> Não 
               </div>
               <div>
                  <label>Já teve ou viveu com alguém que tivesse doença grave e contagiosa?</label>  
                  <input type="radio" name="doencao_contagiosa" value="Sim" <?= $questionario->doencao_contagiosa == 1 ? 'checked' : '' ?>> Sim
                  <input type="radio" name="doencao_contagiosa" value="Não" <?= $questionario->doencao_contagiosa === False ? 'checked' : '' ?>> Não 
               </div>
               <div>
                  <label>A criança já foi vacinada? </label>
                  <input type="radio" name="vacinada" value="Sim" <?= $questionario->vacinada == 1 ? 'checked' : '' ?>> Sim
                  <input type="radio" name="vacinada" value="Não" <?= $questionario->vacinada === False ? 'checked' : '' ?>> Não 
               </div>
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 >Conduta da Criança</h4>
               <div>
                  <label>Durante os primeiros 2 anos de vida a criança: </label>
                  <br>
                  Sentou-se<input type="checkbox" name="sentou" value="Sim" <?= $questionario->sentou == 1 ? 'checked' : '' ?>/>
                  Engatinhou<input type="checkbox" name="engatinhou" value="Sim" <?= $questionario->engatinhou == 1 ? 'checked' : '' ?>/>
                  Andou<input type="checkbox" name="andou" value="Sim" <?= $questionario->andou == 1 ? 'checked' : '' ?>/>
                  Falou<input type="checkbox" name="falou" value="Sim" <?= $questionario->falou == 1 ? 'checked' : '' ?>/>
               </div>
               <div>
                  <label>No lar e na escola a criança apresentou alguma dificuldade no aprendizado? </label>
                  <br>
                  <input  type="radio" name="dificuldade_aprendizado" value="Sim" <?= $questionario->dificuldade_aprendizado == 1 ? 'checked' : '' ?>> Sim
                  <input  type="radio" name="dificuldade_aprendizado" value="Não" <?= $questionario->dificuldade_aprendizado === False ? 'checked' : '' ?>> Não 
               </div>
               <div>
                  <label>Estado Anímico:</label>
                  <br>
                  <input type="radio" name="humor" value="Alegre" <?= $questionario->humor == 'Alegre' ? 'checked' : '' ?>> Alegre
                  <input type="radio" name="humor" value="Triste" <?= $questionario->humor == 'Triste' ? 'checked' : '' ?>> Triste
                  <input type="radio" name="humor" value="Timido" <?= $questionario->humor == 'Timido' ? 'checked' : '' ?>> Tímido 
                  <input type="radio" name="humor" value="Tranquilo" <?= $questionario->humor == 'Tranquilo' ? 'checked' : '' ?>> Tranquilo
                  <input type="radio" name="humor" value="Inquieto" <?= $questionario->humor == 'Inquieto' ? 'checked' : '' ?>> Inquieto 
                  <input type="radio" name="humor" value="Assustado" <?= $questionario->humor == 'Assustado' ? 'checked' : '' ?>> Assustado
               </div>
               <div>
                  <br>
                  <label>Tem o sono: </label>
                  <br>
                  <input type="radio" name="sono" value="Tranquilo" <?= $questionario->sono == 'Tranquilo' ? 'checked' : '' ?>> Tranquilo
                  <input type="radio" name="sono" value="Intranquilo" <?= $questionario->sono == 'Intranquilo' ? 'checked' : '' ?>> Intranquilo  
                  <input type="radio" name="sono" value="Terror" <?= $questionario->sono == 'Terror' ? 'checked' : '' ?>> Terror noturno 
                  <input type="radio" name="sono" value="Pesadelos" <?= $questionario->sono == 'Pesadelos' ? 'checked' : '' ?>> Pesadelos  
                  <input type="radio" name="sono" value="Sonambulismo" <?= $questionario->sono == 'Sonambulismo' ? 'checked' : '' ?>> Sonambulismo  
                  <input type="radio" name="sono" value="Insonia" <?= $questionario->sono == 'Insonia' ? 'checked' : '' ?>> Insônia 
               </div>
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo"> 
                  Conduta Psicomotora
               </h4>
               <input type="radio" name="postura_normal" value="Sim" <?= $questionario->postura_normal == 1 ? 'checked' : '' ?>> Postura normal
               <input type="radio" name="fala_normal" value="Sim" <?= $questionario->fala_normal == 1 ? 'checked' : '' ?>> Fonação normal 
               <input type="checkbox" name="paralisia" value="Sim" <?= $questionario->paralisia == 1 ? 'checked' : '' ?>> Alguma paralisia
               <input type="checkbox" name="enurese" value="Sim" <?= $questionario->enurese == 1 ? 'checked' : '' ?>> Enurese noturna
               <input type="checkbox" name="esfincteres" value="Sim" <?= $questionario->esfincteres == 1 ? 'checked' : '' ?>> Descontrole dos esfíncteres
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo"> 
                  Alimentação
               </h4>
               <label>
                  <div>
                     <input type="radio" name="alimentacao" value="Rejeita Alimentação" <?= $questionario->alimentacao == 'Rejeita Alimentação' ? 'checked' : '' ?>> Rejeita 
                  </div>
                  <div>
                     <input type="radio" name="alimentacao" value="Alimenta-se Normalmente" <?= $questionario->alimentacao == 'Alimenta-se Normalmente' ? 'checked' : '' ?>> Alimenta-se normalmente
                  </div>
                  <div>
                     <input type="radio" name="alimentacao" value="Supra Alimenta-se" <?= $questionario->alimentacao == 'Supra Alimenta-se' ? 'checked' : '' ?>> Supra alimenta-se
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
                     <input type="radio" name="sociabilidade" value="Isolada" <?= $questionario->sociabilidade == 'Isolada' ? 'checked' : '' ?>> Isolada
                  </div>
                  <div>
                     <input type="radio" name="sociabilidade" value="Agressiva" <?= $questionario->sociabilidade == 'Agressiva' ? 'checked' : '' ?>> Agressiva
                  </div>
                  <div>
                     <input type="radio" name="sociabilidade" value="RelNormais" <?= $questionario->sociabilidade == 'RelNormais' ? 'checked' : '' ?>> Relações Normais
                  </div>
               </label>
            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo">
                  Apresenta alguma patologia de conduta?
               </h4>
               Tiques<input type="checkbox" name="tique" value="Sim" <?= $questionario->tique == 1 ? 'checked' : '' ?>/>

               Fobias<input type="checkbox" name="fobia" value="Sim" <?= $questionario->fobia == 1 ? 'checked' : '' ?>/>

               Ansiedade<input type="checkbox" name="ansiedade" value="Sim" <?= $questionario->ansiedade == 1 ? 'checked' : '' ?>/>

               Medo<input type="checkbox" name="medo" value="Sim" <?= $questionario->medo == 1 ? 'checked' : '' ?>/>

               Birra<input type="checkbox" name="birra" value="Sim" <?= $questionario->birra == 1 ? 'checked' : '' ?>/>

               Ciúmes<input type="checkbox" name="ciume" value="Sim" <?= $questionario->ciume == 1 ? 'checked' : '' ?>/>

            </div>
         </div>
         <div>
            <div class="controlacontainer firstcont">
               <h4 class="exibetitulo">
                  <div>
                     Observações:
               </h4>
               <label><input type="text" id="observacoes" name="observacoes" value="<?= $questionario->observacoes ?>"/></label>
               <br>                   
               <label>Aluno(s)<br><input type="text" id="aluno" name="alunos" value="<?= $questionario->alunos ?>"/></label><label>Professor Responsável:<input type="text" id="professor" value="<?= $questionario->professor ?>" name="professor"/></label>
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
                     <input type="radio" name="labio" value="Sim" <?= $questionario->labio == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="labio" value="Alterado" <?= $questionario->labio === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>Mucosa Jugal</label>
                  <div>
                     <input type="radio" name="mucosa" value="Sim" <?= $questionario->mucosa == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="mucosa" value="Não" <?= $questionario->mucosa === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>Língua</label>
                  <div>
                     <input type="radio" name="lingua" value="Sim" <?= $questionario->lingua == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="lingua" value="Não" <?= $questionario->lingua === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>Soalho da boca</label>
                  <div>
                     <input type="radio" name="soalho" value="Sim" <?= $questionario->soalho == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="soalho" value="Não" <?= $questionario->soalho === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>Palato Duro</label>
                  <div>
                     <input type="radio" name="palato_duro" value="Sim" <?= $questionario->palato_duro == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="palato_duro" value="Não" <?= $questionario->palato_duro === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>Garganta</label>
                  <div>
                     <input type="radio" name="garganta" value="Sim" <?= $questionario->garganta == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="garganta" value="Não" <?= $questionario->garganta === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>Palato Mole</label>
                  <div>
                     <input type="radio" name="palato_mole" value="Sim" <?= $questionario->palato_mole == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="palato_mole" value="Não" <?= $questionario->palato_mole === False ? 'checked' : '' ?>> Alterado
                  </div>
               </div>
               <div>
                  <label>Mucosa Alveolar</label> 
                  <div>
                     <input type="radio" name="alveolar" value="Sim" <?= $questionario->alveolar == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="alveolar" value="Não" <?= $questionario->alveolar === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>Gengivas</label>
                  <div>
                     <input type="radio" name="gengiva" value="Sim" <?= $questionario->gengiva == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="gengiva" value="Não" <?= $questionario->gengiva === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>Glândulas Salivares</label>
                  <div>
                     <input type="radio" name="salivar" value="Sim" <?= $questionario->salivar == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="salivar" value="Não" <?= $questionario->salivar === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>Linfonodos</label>
                  <div>
                     <input type="radio" name="linfonodos" value="Sim" <?= $questionario->linfonodos == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="linfonodos" value="Não" <?= $questionario->linfonodos === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>ATM</label>
                  <div>
                     <input type="radio" name="atm" value="Sim" <?= $questionario->atm == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="atm" value="Não" <?= $questionario->atm === False ? 'checked' : '' ?>> Alterado
                  </div>
                  <label>Músculos Mastigadores</label>
                  <div>
                     <input type="radio" name="mastigadores" value="Sim" <?= $questionario->mastigadores == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="mastigadores" value="Não" <?= $questionario->mastigadores === False ? 'checked' : '' ?>> Alterado
                  </div>
               </div>
               <div>
                  <label>Oclusão</label>
                  <div>
                     <input type="radio" name="oclusao" value="Sim" <?= $questionario->oclusao == 1 ? 'checked' : '' ?>> Normal
                     <input type="radio" name="oclusao" value="Não" <?= $questionario->oclusao === False ? 'checked' : '' ?>> Alterado
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
                  value="<?= $questionario->alteracoes ?>"
                  required
                  />
               <br>
               <label>Pressão Arterial Máxima:</label>
               <input  type="text" 
                  id="pamax" 
                  name="pamax"
                  value="<?= $questionario->pamax ?>"
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
                  value="<?= $questionario->pamin ?>"
                  class="mask-tres-n" 
                  placeholder="em mmgH"
                  />
               <br>
               <label>Diagnóstico Presuntivo:</label>
               <input  
                  type="text" 
                  id="presuntivo" 
                  name="presuntivo"
                  value="<?= $questionario->presuntivo ?>"
                  required
                  />
               <br>
               <label>Exames Complementares:</label>
               <input  type="text"
                  id="complementares" 
                  name="complementares"
                  value="<?= $questionario->complementares ?>"
                  required
                  />
               <br>
               <label>Diagnóstico Definitivo:</label>
               <input  type="text" id="definitivo" value="<?= $questionario->definitivo ?>" name="definitivo"/>
               <br>
               <label> Tratamento/Proservação:</label>
               <input  type="text" 
                  id="proservacao" 
                  name="proservacao"
                  value="<?= $questionario->proservacao ?>"
                  required
                  />  
               <br>
               <label>Plano de Tratamento:</label>
               <input  type="text" 
                  id="plano" 
                  name="plano"
                  value="<?= $questionario->plano ?>"
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
                  value="<?= $questionario->alunos_exame ?>"
                  name="alunos_exame"/>
               </label>
               <label>Professor Responsável:<input
                  type="text"
                  id="professor_exame"
                  value="<?= $questionario->professor_exame ?>"
                  name="professor_exame"/>
               </label>
            </div>
         </div>
         <div class="col-md-12 btnsub">
            <input type="hidden" name="questionario_id" value="<?= $questionario->id ?>">
            <input class="submit" type="submit" value="Salvar">
         </div>
   </form>
<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>