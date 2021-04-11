<?php require_once 'layouts/base.php'; ?>

<!-- Content Section -->
<div class="content col-md-12">
    <div class="container">
        <h1>QUESTIONÁRIO DE SAÚDE DA CRIANÇA E DO ADULTO</h1>
        <form method="post" action="/Http/Controller/QuestionarioController.php?acao=inserir">
            <div class="pretty">
                <label >Cadastro<input class="text" type="text" id="Id" name="paciente_id" placeholder="Nº de ID..."/></label><br>
                <label>Principal Queixa<input class="text" type="text" id="Queixa" name="queixa" placeholder="Dor local, febre, incomodo..."/></label>                
            </div>
            <div class="pretty">
                <label>
                    <h3>
                    Histórico do Atual Tratamento</h4><input class="text" type="text" id="Hist" name="historico" placeholder="Recuperação, medicamentos..."/>
                </label>
                <label>
                    <h3>Questionário de Saúde</h3>
                    <div>
                        <div class="col-12">
                            <ol>
                                <div>
                                    <div class="col-6">
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
                <div class="col-6">
                <label>7- Já desmaiou alguma vez?</label>
                <div>
                <input type="radio" name="desmaio" value="Sim"> Sim
                </div>
                <div>
                <input type="radio" name="desmaio" value="Não"> Não
                </div>Não
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
                </ol>
                </div>
                <div class="col-12">
                <div>
                <label><h4>13 -	Você e/ou algum familiar  teve algumas dessas doenças</h4></label>
                </div>
                <div class="col-6">
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
                </div>
                <div class="col-6">
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
                </div>                       
                <div>
                <label>Varicela</label>
                <div>
                <input type="radio" name="varicela" value="Sim"> Sim
                </div>submit
                <div>
                <input type="radio" name="varicela" value="Não"> Não
                </div>
                <label>Outras</label>                        
                <input type="text" id="outros" name="other"/>
                </div>
                </div>
                <div class="col-12">
                <label>14-	É fumante?</label>
                <input type="radio" name="fumante" value="Sim"> Sim
                <input type="radio" name="fumante" value="Não"> Não
                <label>Qual a frequência?</label> <input type="text" id="freq" name="frequencia"/> /dia
                </div>
                </div>
            </div>
            <div class="pretty">
                <h2>Questionário Infantil - Odontopediatria</h2>
                <br>
                <label>Histórico Gestacional<input type="text" id="gestacional" name="gestacional" /></label>
                <br><br>
                <label>Nasceu de Parto</label>
                <input type="radio" name="parto" value="Normal"> Normal
                <input type="radio" name="parto" value="Forceps"> A fórceps
                <input type="radio" name="parto" value="Cesariana"> Cesariana   
                <br>
                <label>Problemas Durante o Parto?</label>
                <input type="radio" name="problemas_parto" value="Sim"> Sim
                <input type="radio" name="problemas_parto" value="Não"> Não    
                <br>
                <label>A amamentação foi:</label>
                <input type="radio" name="tipo_amamentacao" value="Natural"> Natural
                <input type="radio" name="tipo_amamentacao" value="Mamadeira"> Mamadeira 
                <label>até a idade de:<input type="text" id="amament" name="idade_amamentacao" /></label>
                <br>
                <label>Já lhe foi dito para não tomar anestesia local?      
                <input type="radio" name="anestesia" value="Sim"> Sim
                <input type="radio" name="anestesia" value="Não"> Não 
                </label>
                <br>
                <label>Já teve ou viveu com alguém que tivesse doença grave e contagiosa?      
                <input type="radio" name="doencao_contagiosa" value="Sim"> Sim
                <input type="radio" name="doencao_contagiosa" value="Não"> Não 
                </label>
                <br>
                <label>A criança já foi vacinada?    
                <input type="radio" name="vacinada" value="Sim"> Sim
                <input type="radio" name="vacinada" value="Não"> Não 
                </label>
            </div>
            <div class="pretty">
                <h2>Conduta da Criança</h2>
                <br>
                <label>Durante os primeiros 2 anos de vida a criança: <br>
                Sentou-se<input type="checkbox" name="sentou" /><br>
                Engatinhou<input type="checkbox" name="engatinhou" /><br>
                Andou<input type="checkbox" name="andou" /><br>
                Falou<input type="checkbox" name="falou" /><br>
                </label>
                <br>
                <label>No lar e na escola a criança apresentou alguma dificuldade no aprendizado?  
                <input type="radio" name="dificuldade_aprendizado" value="Sim"> Sim
                <input type="radio" name="dificuldade_aprendizado" value="Não"> Não 
                </label>
                <br>
                <label>Estado Anímico: 
                <input type="radio" name="humor" value="Alegre"> Alegre
                <input type="radio" name="humor" value="Triste"> Triste
                <input type="radio" name="humor" value="Timido"> Tímido 
                <input type="radio" name="humor" value="Tranquilo"> Tranquilo
                <input type="radio" name="humor" value="Inquieto"> Inquieto 
                <input type="radio" name="humor" value="Assustado"> Assustado
                </label>
                <br>
                <label>Tem o sono: 
                <input type="radio" name="sono" value="Tranquilo"> Tranquilo
                <input type="radio" name="sono" value="Intranquilo"> Intranquilo  
                <input type="radio" name="sono" value="Terror"> Terror noturno 
                <input type="radio" name="sono" value="Pesadelos"> Pesadelos  
                <input type="radio" name="sono" value="Sonambulismo"> Sonambulismo  
                <input type="radio" name="sono" value="Insonia"> Insônia 
                </label>
                <br><br> 
                <div>
                    <label>
                        Conduta Psicomotora:
                        <div>
                            <input type="radio" name="postura_normal" value="Sim"> Postura normal
                            <input type="radio" name="postura_normal" value="Não"> Postura alterada
                        </div>
                        <div>
                            <input type="radio" name="fala_normal" value="Sim"> Fonação normal 
                            <input type="radio" name="fala_normal" value="Não"> Distúrbios da fala  
                        </div>
                        <div>
                            <input type="checkbox" name="paralisia" value="AlgParalisia"> Alguma paralisia
                            <input type="checkbox" name="enurese" value="Enurese"> Enurese noturna
                            <input type="checkbox" name="esfincteres" value="Descontrole"> Descontrole dos esfíncteres
                        </div>
                    </label>
                </div>
                <div>
                    <label>
                        Alimentação:
                        <div>
                            <input type="radio" name="alimentacao" value="Rejeita"> Rejeita 
                        </div>
                        <div>
                            <input type="radio" name="alimentacao" value="AlimentaNormalmente"> Alimenta-se normalmente
                        </div>
                        <div>
                            <input type="radio" name="alimentacao" value="SupraAlimenta"> Supra alimenta-se
                        </div>
                    </label>
                </div>
                <label>Sociabilidade:
                <input type="radio" name="sociabilidade" value="Isolada"> Isolada 
                <input type="radio" name="sociabilidade" value="Agressiva"> Agressiva   
                <input type="radio" name="sociabilidade" value="RelNormais"> Relações Normais               
                </label>
                <br><br>
                <div>
                    <div>
                        <label>
                            Apresenta alguma patologia de conduta: <br>
                    </div>
                    <div class="col-6">
                    <div>
                    Tiques<input type="checkbox" name="tique" />
                    </div>
                    <div>
                    Fobias<input type="checkbox" name="fobia" />
                    </div>
                    <div>
                    Ansiedade<input type="checkbox" name="ansiedade" />
                    </div>                       
                    </div>
                    <div class="col-6">
                    <div>
                    Medo<input type="checkbox" name="medo" />
                    </div>
                    <div>
                    Birra<input type="checkbox" name="birra" />
                    </div>                        
                    <div>
                    Ciúmes<input type="checkbox" name="ciume" />
                    </div>                       
                    </div>            
                    </label>
                </div>
                <br><br>
                <label>Observações:<input type="text" id="observacoes" name="observacoes" /></label><br>
                <br><br><br>
                <label>Aluno(s)<input type="text" id="aluno" name="alunos"/></label><label>Professor Responsável:<input type="text" id="professor" name="professor"/></label><br>
            </div>
            <div class="col-12">
                <div>
                    <label>
                        <h3>Exame Físico</h3>
                        <br>
                        <div class="col-6 pretty">
                            <div>
                    <label>Lábio</label>
                    <div>
                    <input type="radio" name="labio" value="Sim"> Normal                    
                    <input type="radio" name="labio" value="Alterado"> Alterado
                    </div>                
                    </div>  
                    <div>
                    <label>Mucosa Jugal</label>
                    <div>
                    <input type="radio" name="mucosa" value="Sim"> Normal
                    <input type="radio" name="mucosa" value="Não"> Alterado
                    </div>
                    </div>              
                    <div>
                    <label>Língua</label>
                    <div>
                    <input type="radio" name="lingua" value="Sim"> Normal
                    <input type="radio" name="lingua" value="Não"> Alterado
                    </div>
                    </div>              
                    <div>
                    <label>Soalho da boca</label>
                    <div>
                    <input type="radio" name="soalho" value="Sim"> Normal
                    <input type="radio" name="soalho" value="Não"> Alterado
                    </div>
                    </div>              
                    <div>
                    <label>Palato Duro</label>
                    <div>
                    <input type="radio" name="palato_duro" value="Sim"> Normal
                    <input type="radio" name="palato_duro" value="Não"> Alterado
                    </div>
                    </div>              
                    <div>
                    <label>Garganta</label>
                    <div>
                    <input type="radio" name="garganta" value="Sim"> Normal
                    <input type="radio" name="garganta" value="Não"> Alterado
                    </div>
                    </div>                         
                    <div>
                    <label>Palato Mole</label>
                    <div>
                    <input type="radio" name="palato_mole" value="Sim"> Normal
                    <input type="radio" name="palato_mole" value="Não"> Alterado
                    </div>
                    </div>
                    </div>
                    <div class="col-6 pretty">
                        <div>
                            <label>Mucosa Alveolar</label> 
                            <div>
                                <input type="radio" name="alveolar" value="Sim"> Normal
                                <input type="radio" name="alveolar" value="Não"> Alterado
                            </div>
                        </div>
                        <div>
                            <label>Gengivas</label>
                            <div>
                                <input type="radio" name="gengiva" value="Sim"> Normal
                                <input type="radio" name="gengiva" value="Não"> Alterado
                            </div>
                        </div>
                        <div>
                            <label>Glândulas Salivares</label>
                            <div>
                                <input type="radio" name="salivar" value="Sim"> Normal
                                <input type="radio" name="salivar" value="Não"> Alterado
                            </div>
                        </div>
                        <div>
                            <label>Linfonodos</label>
                            <div>
                                <input type="radio" name="linfonodos" value="Sim"> Normal
                                <input type="radio" name="linfonodos" value="Não"> Alterado
                            </div>
                        </div>
                        <div>
                            <label>ATM</label>
                            <div>
                                <input type="radio" name="atm" value="Sim"> Normal
                                <input type="radio" name="atm" value="Não"> Alterado
                            </div>
                        </div>
                        <div>
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
                    <div>
                        <div class="centralizar pretty">
                            <label>
                                <div>
                                    Alterações Encontradas:<input  type="text" id="altera" name="alteracoes"/>
                                </div>
                                <div>
                                    Pressão Arterial Máxima:<input  type="text" id="pamax" name="pamax" placeholder="em mmgH"/>
                                </div>
                                <div>
                                    Pressão Arterial Mínima:<input  type="text" id="pamin" name="pamin" placeholder="em mmgH"/>
                                </div>
                                <div>
                                    Diagnóstico Presuntivo:<input  type="text" id="presuntivo" name="presuntivo"/>
                                </div>
                                <div>
                                    Exames Complementares:<input  type="text" id="complementares" name="complementares"/>
                                </div>
                                <div>
                                    Diagnóstico Definitivo:<input  type="text" id="definitivo" name="definitivo"/>
                                </div>
                                <div>
                                    Tratamento/Proservação:<input  type="text" id="proservacao" name="proservacao"/>
                                </div>
                                <div>
                                    Plano de Tratamento:<input  type="text" id="tratamento" name="tratamento"/>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                </label>
                <label>Aluno(s)<input  type="text" id="alunos_exame" name="alunos_exame"/></label><label>Professor Responsável:<input  type="text" id="professor_exame" name="professor_exame"/></label><br>
                <!-- botão submit-->
                <div>
                    <input class="submit" type="submit" value="Salvar Informações">
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>