<?php require_once 'layouts/base.php'; ?>

<!-- Content Section -->
<div class="content col-md-12">
    <div class="container">
        <h1>QUESTIONÁRIO DE SAÚDE DA CRIANÇA E DO ADULTO</h1>
        <div class="pretty">
            <label >Cadastro<input class="text" type="text" id="Id" name="Id" placeholder="Nº de ID..."/></label><br>
            <label>Principal Queixa<input class="text" type="text" id="Queixa" name="Queixa" placeholder="Dor local, febre, incomodo..."/></label>                
        </div>
        <div class="pretty">
            <label>
                <h3>
                Histórico do Atual Tratamento</h4><input class="text" type="text" id="Hist" name="Hist" placeholder="Recuperação, medicamentos..."/>
            </label>
            <label>
                <h3>Questionário de Saúde</h3>
                <div>
                    <div class="col-12">
                        <ol>
                            <form>
                                <div class="col-6">
            <label>1- Já teve hemorragia?</label>
            <div>
            <input type="radio" name="hemo" value="op1"> Sim</input>
            </div>
            <div>
            <input type="radio" name="hemo" value="op2"> Não</input>
            </div>                                
            <label>2- Sofre(u) de alergia?</label>
            <div>
            <input type="radio" name="alerg" value="op1"> Sim</input>
            </div>
            <div>
            <input type="radio" name="alerg" value="op2"> Não</input>
            </div>                                    
            <label>3- Teve reumatismo infeccioso?</label>
            <div>
            <input type="radio" name="reumato" value="op1"> Sim</input>
            </div>
            <div>
            <input type="radio" name="reumato" value="op2"> Não</input>
            </div>
            <label>4- Sofre(u) de distúrbio cardiovascular?</label>
            <div>
            <input type="radio" name="cardiovascular" value="op1"> Sim</input>
            </div>
            <div>
            <input type="radio" name="cardiovascular" value="op2"> Não</input>
            </div>
            <label>5- Sofre(u) de gastrite?</label>
            <div>
            <input type="radio" name="gastrite" value="op1"> Sim</input>
            </div>
            <div>
            <input type="radio" name="gastrite" value="op2"> Não</input>
            </div>
            <label>6- É diabético ou tem familiares diabéticos?</label>
            <div>
            <input type="radio" name="famdiab" value="op1" > Sim
            </div>
            <div>
            <input type="radio" name="famdiab" value="op2"> Não
            </div>                            
            </div>    
            <div class="col-6">
            <label>7- Já desmaiou alguma vez?</label>
            <div>
            <input type="radio" name="desmaio" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="desmaio" value="op2"> Não
            </div>
            <label>8- Está sob tratamento médico?</label>
            <div>
            <input type="radio" name="tratmed" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="tratmed" value="op2"> Não
            </div>
            <label>9- Está tomando algum medicamento?</label>
            <div>
            <input type="radio" name="medicamento" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="medicamento" value="op2"> Não
            </div>   
            <label>10- Esteve doente ou foi operado nos últimos 5 anos?</label>
            <div>
            <input type="radio" name="sick" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="sick" value="op2"> Não
            </div>
            <label>11- Tem hábitos, vícios ou manias?</label>
            <div>
            <input type="radio" name="habit" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="habit" value="op2"> Não
            </div>
            <label>12- Tem ansiedade/depressão?</label>
            <div>
            <input type="radio" name="depre" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="depre" value="op2"> Não
            </div>
            </div>
            </form>
            </ol>
            </div>    
            <form class="col-12">
            <div>
            <label><h4>13 -	Você e/ou algum familiar  teve algumas dessas doenças</h4></label>
            </div>
            <div class="col-6">
            <label>Tuberculose</label>
            <div>
            <input type="radio" name="tuberculo" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="tuberculo" value="op2"> Não
            </div>
            <label>Sífilis</label>
            <div>
            <input type="radio" name="sifilis" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="sifilis" value="op2"> Não
            </div>
            <label>Hepatite A, B, C</label>
            <div>
            <input type="radio" name="hepatite" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="hepatite" value="op2"> Não
            </div>
            </div>
            <div class="col-6">
            <label>SIDA/AIDS</label>
            <div>
            <input type="radio" name="aids" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="aids" value="op2"> Não                            
            </div>    
            <label >Sarampo</label>
            <div>
            <input type="radio" name="sarampo" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="sarampo" value="op2"> Não
            </div>
            <label>Caxumba</label>
            <div>
            <input type="radio" name="caxumba" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="caxumba" value="op2"> Não
            </div>
            </div>                       
            <div>
            <label>Varicela</label>
            <div>
            <input type="radio" name="varicela" value="op1"> Sim
            </div>
            <div>
            <input type="radio" name="varicela" value="op2"> Não
            </div>
            <label>Outras</label>                        
            <input type="text" id="otherSicks" name="other"/>
            </div>
            </form>
            <form class="col-12">
            <label>14-	É fumante?</label>
            <input type="radio" name="fumo" value="op1"> Sim
            <input type="radio" name="fumo" value="op2"> Não
            <label>Qual a frequência?</label> <input type="text" id="freq" name="fumo"/> /dia
            </form>
            </div>
        </div>
        <div class="pretty">
            <h2>Questionário Infantil - Odontopediatria</h2>
            <br>
            <label>Histórico Gestacional<input type="text" id="gestacional" name="gestacional" /></label>
            <br><br>
            <label>Nasceu de Parto</label>
            <input type="radio" name="parto" value="op1"> Normal
            <input type="radio" name="parto" value="op2"> A fórceps
            <input type="radio" name="parto" value="op3"> Cesariana   
            <br>
            <label>Problemas Durante o Parto?</label>
            <input type="radio" name="probpart" value="op1"> Sim
            <input type="radio" name="probpart" value="op2"> Não    
            <br>
            <label>A amamentação foi:</label>
            <input type="radio" name="amament" value="op1"> Natural
            <input type="radio" name="amament" value="op2"> Mamadeira 
            <label>até a idade de:<input type="text" id="amament" name="amament" /></label>
            <br>
            <label>Já lhe foi dito para não tomar anestesia local?      
            <input type="radio" name="anestesia" value="op1"> Sim
            <input type="radio" name="anestesia" value="op2"> Não 
            </label>
            <br>
            <label>Já teve ou viveu com alguém que tivesse doença grave e contagiosa?      
            <input type="radio" name="contagio" value="op1"> Sim
            <input type="radio" name="contagio" value="op2"> Não 
            </label>
            <br>
            <label>A criança já foi vacinada?    
            <input type="radio" name="vacina" value="op1"> Sim
            <input type="radio" name="vacina" value="op2"> Não 
            </label>
        </div>
        <div class="pretty">
            <h2>Conduta da Criança</h2>
            <br>
            <label>Durante os primeiros 2 anos de vida a criança: <br>
            Sentou-se<input type="checkbox" name="sit" /><br>
            Engatinhou<input type="checkbox" name="engat" /><br>
            Andou<input type="checkbox" name="walk" /><br>
            Falou<input type="checkbox" name="speak" /><br>
            </label>
            <br>
            <label>No lar e na escola a criança apresentou alguma dificuldade no aprendizado?  
            <input type="radio" name="learn" value="op1"> Sim
            <input type="radio" name="learn" value="op2"> Não 
            </label>
            <br>
            <label>Estado Anímico: 
            <input type="radio" name="humor" value="op1"> Alegre
            <input type="radio" name="humor" value="op2"> Triste
            <input type="radio" name="humor" value="op3"> Tímido 
            <input type="radio" name="humor" value="op4"> Tranquilo
            <input type="radio" name="humor" value="op5"> Inquieto 
            <input type="radio" name="humor" value="op6"> Assustado
            </label>
            <br>
            <label>Tem o sono: 
            <input type="radio" name="sono" value="op1"> Tranquilo
            <input type="radio" name="sono" value="op2"> Intranquilo  
            <input type="radio" name="sono" value="op3"> Terror noturno 
            <input type="radio" name="sono" value="op4"> Pesadelos  
            <input type="radio" name="sono" value="op5"> Sonambulismo  
            <input type="radio" name="sono" value="op6"> Insônia 
            </label>
            <br><br> 
            <div>
                <label>
                    Conduta Psicomotora:
                    <div>
                        <input type="radio" name="postura" value="op1"> Postura normal
                        <input type="radio" name="postura" value="op2"> Postura alterada
                    </div>
                    <div>
                        <input type="radio" name="fala" value="op3"> Fonação normal 
                        <input type="radio" name="fala" value="op4"> Distúrbios da fala  
                    </div>
                    <div>
                        <input type="checkbox" name="paralisia" value="op5"> Alguma paralisia
                        <input type="checkbox" name="enurese " value="op6"> Enurese noturna
                        <input type="checkbox" name="descontrole" value="op6"> Descontrole dos esfíncteres
                    </div>
                </label>
            </div>
            <div>
                <label>
                    Alimentação:
                    <div>
                        <input type="radio" name="alimenta" value="op1"> Rejeita 
                    </div>
                    <div>
                        <input type="radio" name="alimenta" value="op2"> Alimenta-se normalmente
                    </div>
                    <div>
                        <input type="radio" name="alimenta" value="op3"> Supra alimenta-se
                    </div>
                </label>
            </div>
            <label>Sociabilidade:
            <input type="radio" name="social" value="op1"> Isolada 
            <input type="radio" name="social" value="op2"> Agressiva   
            <input type="radio" name="social" value="op3"> Relações Normais               
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
            <label>Observações:<input type="text" id="OBS" name="OBS" /></label><br>
            <br><br><br>
            <label>Aluno(s)<input type="text" id="aluno" name="aluno"/></label><label>Professor Responsável:<input type="text" id="professor" name="professor"/></label><br>
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
                <input type="radio" name="labio" value="op1"> Normal                    
                <input type="radio" name="labio" value="op2"> Alterado
                </div>                
                </div>  
                <div>
                <label>Mucosa Jugal</label>
                <div>
                <input type="radio" name="mucosa" value="op3"> Normal
                <input type="radio" name="mucosa" value="op4"> Alterado
                </div>
                </div>              
                <div>
                <label>Língua</label>
                <div>
                <input type="radio" name="lingua" value="op5"> Normal
                <input type="radio" name="lingua" value="op6"> Alterado
                </div>
                </div>              
                <div>
                <label>Soalho da boca</label>
                <div>
                <input type="radio" name="soalho" value="op1"> Normal
                <input type="radio" name="soalho" value="op2"> Alterado
                </div>
                </div>              
                <div>
                <label>Palato Duro</label>
                <div>
                <input type="radio" name="pld" value="op3"> Normal
                <input type="radio" name="pld" value="op4"> Alterado
                </div>
                </div>              
                <div>
                <label>Garganta</label>
                <div>
                <input type="radio" name="garganta" value="op5"> Normal
                <input type="radio" name="garganta" value="op6"> Alterado
                </div>
                </div>                         
                <div>
                <label>Palato Mole</label>
                <div>
                <input type="radio" name="plm" value="op5"> Normal
                <input type="radio" name="plm" value="op6"> Alterado
                </div>
                </div>
                </div>
                <div class="col-6 pretty">
                    <div>
                        <label>Mucosa Alveolar</label> 
                        <div>
                            <input type="radio" name="alveolar" value="op1"> Normal
                            <input type="radio" name="alveolar" value="op2"> Alterado
                        </div>
                    </div>
                    <div>
                        <label>Gengivas</label>
                        <div>
                            <input type="radio" name="gengiva" value="op3"> Normal
                            <input type="radio" name="gengiva" value="op4"> Alterado
                        </div>
                    </div>
                    <div>
                        <label>Glândulas Salivares</label>
                        <div>
                            <input type="radio" name="salivar" value="op5"> Normal
                            <input type="radio" name="salivar" value="op6"> Alterado
                        </div>
                    </div>
                    <div>
                        <label>Linfonodos</label>
                        <div>
                            <input type="radio" name="linfo" value="op1"> Normal
                            <input type="radio" name="linfo" value="op2"> Alterado
                        </div>
                    </div>
                    <div>
                        <label>ATM</label>
                        <div>
                            <input type="radio" name="atm" value="op3"> Normal
                            <input type="radio" name="atm" value="op4"> Alterado
                        </div>
                    </div>
                    <div>
                        <label>Músculos Mastigadores</label>
                        <div>
                            <input type="radio" name="mastiga" value="op5"> Normal
                            <input type="radio" name="mastiga" value="op6"> Alterado
                        </div>
                    </div>
                    <div>
                        <label>Oclusão</label>
                        <div>
                            <input type="radio" name="oclusa" value="op5"> Normal
                            <input type="radio" name="oclusa" value="op6"> Alterado
                        </div>
                    </div>
                </div>
                <div>
                    <div class="centralizar pretty">
                        <label>
                            <div>
                                Alterações Encontradas:<input  type="text" id="altera" name="altera"/>
                            </div>
                            <div>
                                Pressão Arterial Máxima:<input  type="text" id="hamax" name="hamax" placeholder="em mmgH"/>
                            </div>
                            <div>
                                Pressão Arterial Mínima:<input  type="text" id="hamin" name="hamin" placeholder="em mmgH"/>
                            </div>
                            <div>
                                Diagnóstico Presuntivo:<input  type="text" id="diagpre" name="diagpre"/>
                            </div>
                            <div>
                                Exames Complementares:<input  type="text" id="exmcomple" name="exmcomple"/>
                            </div>
                            <div>
                                Diagnóstico Definitivo:<input  type="text" id="diagdef" name="diagdef"/>
                            </div>
                            <div>
                                Tratamento/Proservação:<input  type="text" id="tratpro" name="tratpro"/>
                            </div>
                            <div>
                                Plano de Tratamento:<input  type="text" id="tratplan" name="tratplan"/>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            </label>
            <label>Aluno(s)<input  type="text" id="alunlid" name="alunlid"/></label><label>Professor Responsável:<input  type="text" id="proflider" name="proflider"/></label><br>
            <!-- botão submit-->
            <div>
                <input class="submit" type="submit" value="Salvar Informações">
            </div>
        </div>
    </div>
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>