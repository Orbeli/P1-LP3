DROP  TABLE paciente;

CREATE TABLE paciente ( 
    id SERIAL PRIMARY KEY,
    nome VARCHAR(80),
    data_nasc DATE,
    sexo VARCHAR(20),
    peso INTEGER,
    altura VARCHAR(5),
    cor VARCHAR(20),
    escolaridade VARCHAR(30),
    profissao VARCHAR(50),
    RG VARCHAR(13),
    CPF VARCHAR(15),
    estado_civil VARCHAR(30),
    naturalidade VARCHAR(30),
    estado VARCHAR(30)
);

CREATE TABLE endereco (
  id SERIAL PRIMARY KEY,
  rua VARCHAR(100),
  numero VARCHAR(5),
  complemento VARCHAR(80),
  bairro VARCHAR(80),
  CEP VARCHAR(10),
  cidade VARCHAR(80),
  estado VARCHAR(50),
  contato VARCHAR(15),
  paciente_id INTEGER,
  FOREIGN KEY (paciente_id) REFERENCES paciente(id) ON DELETE CASCADE
);

CREATE TABLE filiacao (
  id SERIAL PRIMARY KEY,
  nome_mae VARCHAR(100),
  nome_pai VARCHAR(80),
  nacionalidade_mae VARCHAR(80),
  nacionalidade_pai VARCHAR(80),
  paciente_id INTEGER,
  FOREIGN KEY (paciente_id) REFERENCES paciente(id) ON DELETE CASCADE
);

CREATE TABLE questionario ( 
  id SERIAL PRIMARY KEY,
  queixa VARCHAR(255),
  historico VARCHAR(255),
  hemorragia BOOLEAN,
  alergia BOOLEAN,
  reumatismo BOOLEAN,
  disturbio_cardiovascular BOOLEAN,
  gastrite BOOLEAN,
  diabetico BOOLEAN,
  desmaio BOOLEAN,
  tratamento BOOLEAN,
  medicamento BOOLEAN,
  doenca_operacao BOOLEAN,
  vicios BOOLEAN,
  ansiedade_depressao BOOLEAN,
  tuberculose BOOLEAN,
  sifilis BOOLEAN,
  hepatite BOOLEAN,
  aids BOOLEAN,
  sarampo BOOLEAN,
  caxumba BOOLEAN,
  varicela BOOLEAN,
  outros VARCHAR(255),
  fumante BOOLEAN,
  frequencia VARCHAR(3),
  paciente_id INTEGER,
  FOREIGN KEY (paciente_id) REFERENCES paciente(id) ON DELETE CASCADE
);

CREATE TABLE questionario_infantil (
  id SERIAL PRIMARY KEY,
  gestacional VARCHAR(255),
  parto VARCHAR(30),
  problemas_parto BOOLEAN,
  tipo_amamentacao VARCHAR(20),
  idade_amamentacao VARCHAR(3),
  anestesia BOOLEAN,
  doencao_contagiosa BOOLEAN,
  vacinada BOOLEAN,
  questionario_id INTEGER,
  FOREIGN KEY (questionario_id) REFERENCES questionario(id) ON DELETE CASCADE
);

CREATE TABLE conduta_crianca (
  id SERIAL PRIMARY KEY,
  sentou BOOLEAN,
  engatinhou BOOLEAN,
  andou BOOLEAN,
  falou BOOLEAN,
  dificuldade_aprendizado BOOLEAN,
  humor VARCHAR(30),
  sono VARCHAR(30),
  postura_normal BOOLEAN,
  fala_normal BOOLEAN,
  paralisia BOOLEAN,
  enurese BOOLEAN,
  esfincteres BOOLEAN,
  alimentacao VARCHAR(30),
  sociabilidade VARCHAR(30),
  tique BOOLEAN,
  fobia BOOLEAN,
  ansiedade BOOLEAN,
  medo BOOLEAN,
  birra BOOLEAN,
  ciume BOOLEAN,
  observacoes VARCHAR(255),
  alunos VARCHAR(255),
  professor VARCHAR(60),
  questionario_id INTEGER,
  FOREIGN KEY (questionario_id) REFERENCES questionario(id) ON DELETE CASCADE
);

CREATE TABLE exame_fisico (
  id SERIAL PRIMARY KEY,
  labio BOOLEAN,
  mucosa BOOLEAN,
  lingua BOOLEAN,
  soalho BOOLEAN,
  palato_duro BOOLEAN,
  garganta BOOLEAN,
  palato_mole BOOLEAN,
  alveolar BOOLEAN,
  gengiva BOOLEAN,
  salivar BOOLEAN,
  linfonodos BOOLEAN,
  atm BOOLEAN,
  mastigadores BOOLEAN,
  oclusao BOOLEAN,
  alteracoes VARCHAR(255),
  pamax VARCHAR(10),
  pamin VARCHAR(10),
  presuntivo VARCHAR(255),
  complementares VARCHAR(70),
  definitivo VARCHAR(35),
  proservacao VARCHAR(255),
  tratamento VARCHAR(255),
  alunos_exame VARCHAR(100),
  professor_exame VARCHAR(60),
  questionario_id INTEGER,
  FOREIGN KEY (questionario_id) REFERENCES questionario(id) ON DELETE CASCADE
);

SELECT * FROM paciente
INNER JOIN filiacao ON
  paciente.id = filiacao.paciente_id;

SELECT * 
FROM paciente
INNER JOIN filiacao ON 
  paciente.id = filiacao.paciente_id 
INNER JOIN endereco ON 
  paciente.id = endereco.paciente_id;

INSERT INTO paciente (nome,data_nasc,sexo,peso,altura,cor,escolaridade,profissao,rg,cpf,estado_civil,naturalidade,estado) VALUES (
    'gabriel',
    '10/04/2021',
    'masculino',
    '80',
    '1,80',
    'branco',
    'graduando',
    'programador',
    '50.421.178-X',
    '411.276.078-71',
    'solteiro',
    'Brasil',
    'SP'
); 