CREATE DATABASE share_receitas
DEFAULT COLLATE utf8_general_ci
DEFAULT CHARSET utf8;

USE share_receitas;

CREATE TABLE perfil(
	id_perfil int NOT NULL AUTO_INCREMENT,
    descricao varchar(20),
    PRIMARY KEY(id_perfil)
);

CREATE TABLE usuario(
    id_usuario int NOT NULL AUTO_INCREMENT,
    nome varchar(50),
    cpf bigint(11),
    email varchar(50),
    senha varchar(20),
    ativo TINYINT DEFAULT 1,
    id_perfil int,
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_perfil) REFERENCES perfil(id_perfil)
);

CREATE TABLE categoria(
	id_categoria int NOT NULL AUTO_INCREMENT,
    descricao varchar(20),
    PRIMARY KEY(id_categoria)
);

CREATE TABLE receita(
	id_receita int NOT NULL AUTO_INCREMENT,
    nome varchar(50),
    ingredientes varchar(500),
    preparo varchar(500),
    id_categoria int,
    id_usuario int NOT NULL,
    ativo TINYINT DEFAULT 1,
    PRIMARY KEY(id_receita),
    FOREIGN KEY(id_categoria) REFERENCES categoria (id_categoria),
    FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario)
);

INSERT INTO perfil VALUES
  (1, 'ADMIN'),
  (2, 'COLABORADOR');

INSERT INTO usuario VALUES
  (default, 'Gustavo Carvalho', 11122233365, 'gustavo@email.com', 'batata', default, 1),
  (default, 'Brayan Ferreira', 99988877743, 'brayan@email.com', 'ne', default, 2);

INSERT INTO categoria VALUES
  (1, 'Massas'),
  (2, 'Carnes'),
  (3, 'Sobremesas'),
  (4, 'Comidas Típicas'),
  (5, 'Comidas Fitness');
