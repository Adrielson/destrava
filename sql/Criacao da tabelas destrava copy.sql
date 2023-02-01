CREATE TABLE enderecos (
idEndereco INTEGER,
rua VARCHAR(30),
cidade VARCHAR(30),
bairro VARCHAR(30),
cep VARCHAR(10),
estado VARCHAR(30),
PRIMARY KEY(idEndereco)
);

CREATE TABLE admin (
id INTEGER,
login VARCHAR(25),
senha VARCHAR(25),
PRIMARY KEY(id)
);

CREATE TABLE usuario (
  id INT PRIMARY KEY AUTO_INCREMENT,
  tipo ENUM('professor', 'aluno'),
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  senha VARCHAR(100) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE usuarioProfessor (
  idProfessor INTEGER,
  PRIMARY KEY(idProfessor),
  FOREIGN KEY (idProfessor) REFERENCES usuarios(id)
);

CREATE TABLE usuarioAluno (
  idAluno INTEGER,
  PRIMARY KEY(idAluno),
  FOREIGN KEY (idAluno) REFERENCES usuarios(id)
);

-- CREATE TABLE alunos (
-- 	id INTEGER,
-- 	nome VARCHAR(60) NOT NULL,
-- 	sexo CHAR(1),
-- 	email VARCHAR(70),
-- 	usuario VARCHAR(30),
-- 	senha VARCHAR(15),
-- 	endereco INTEGER,
-- 	dataNascimento DATE,
-- 	PRIMARY KEY(id),
-- 	FOREIGN KEY (endereco) REFERENCES enderecos(idEndereco)
-- );


-- CREATE TABLE professores (
-- 	id INTEGER,
-- 	nome VARCHAR(60) NOT NULL,
-- 	sexo CHAR(1),
-- 	email VARCHAR(70),
-- 	usuario VARCHAR(30),
-- 	senha VARCHAR(15),
-- 	endereco INTEGER,
-- 	dataNascimento DATE,
-- 	PRIMARY KEY(id),
-- 	FOREIGN KEY (endereco) REFERENCES enderecos(idEndereco)
-- );


-- CREATE TABLE pacotes (
-- idPacote INTEGER,
-- produto VARCHAR(60) NOT NULL,
-- preco DECIMAL(10, 2),
-- descricao LONGTEXT,
-- professor integer,
-- PRIMARY KEY(idPacote),
-- FOREIGN KEY (professor) REFERENCES usuarios(id)
-- );

-- CREATE TABLE pedidos (
-- idPedido INTEGER,
-- aluno INTEGER,
-- status VARCHAR(8),
-- pacote INTEGER,
-- data DATE,
-- PRIMARY KEY(idPedido),
-- FOREIGN KEY(aluno) REFERENCES usuarios(id),
-- FOREIGN KEY(pacote) REFERENCES pacotes(idPacote)
-- );

CREATE TABLE pacotes (
idPacote INTEGER,
produto VARCHAR(60) NOT NULL,
preco DECIMAL(10, 2),
descricao LONGTEXT,
professor integer,
PRIMARY KEY(idPacote),
FOREIGN KEY (professor) REFERENCES usuarioProfessor(idProfessor)
);

CREATE TABLE pedidos (
idPedido INTEGER,
aluno INTEGER,
status VARCHAR(8),
pacote INTEGER,
data DATE,
PRIMARY KEY(idPedido),
FOREIGN KEY(aluno) REFERENCES usuarioAluno(idAluno),
FOREIGN KEY(pacote) REFERENCES pacotes(idPacote)
);
