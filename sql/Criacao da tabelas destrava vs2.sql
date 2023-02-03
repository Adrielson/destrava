CREATE TABLE enderecos (
id INTEGER,
rua VARCHAR(30),
cidade VARCHAR(30),
bairro VARCHAR(30),
cep VARCHAR(10),
estado VARCHAR(30),
PRIMARY KEY(id)
);

CREATE TABLE admin (
id INTEGER,
login VARCHAR(25),
senha VARCHAR(25),
PRIMARY KEY(id)
);

CREATE TABLE usuarios (
  id INTEGER,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  tipo ENUM('professor', 'aluno') NOT NULL,
  idEndereco INTEGER,
  PRIMARY KEY(id),
  FOREIGN KEY (idEndereco) REFERENCES enderecos(id)
);

CREATE TABLE usuariosprofessor (
  id INTEGER,
  titularidade ENUM('Tecnico', 'Graduado', 'Mestre', 'Doutor'),
  formacao_curso VARCHAR(100),
  bio LONGTEXT,
  PRIMARY KEY(id),
  FOREIGN KEY (id) REFERENCES usuarios(id)
);



CREATE TABLE usuariosaluno (
  id INTEGER,
  escolaridade ENUM('Educação infantil', 'Fundamental', 'Médio', 'Superior', 'Mestrado', 'Doutorado'),
  PRIMARY KEY(id),
  FOREIGN KEY (id) REFERENCES usuarios(id)
);


CREATE TABLE pacotes (
idPacote INTEGER,
produto VARCHAR(60) NOT NULL,
preco DECIMAL(10, 2),
descricao LONGTEXT,
professor integer,
PRIMARY KEY(idPacote),
FOREIGN KEY (professor) REFERENCES usuariosprofessor(id)
);

CREATE TABLE pedidos (
idPedido INTEGER,
aluno INTEGER,
status VARCHAR(8),
pacote INTEGER,
data DATE,
PRIMARY KEY(idPedido),
FOREIGN KEY(aluno) REFERENCES usuarios(id),
FOREIGN KEY(pacote) REFERENCES pacotes(idPacote)
);



