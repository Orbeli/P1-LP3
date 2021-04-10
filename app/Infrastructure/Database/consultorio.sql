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