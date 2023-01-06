CREATE DATABASE apoiocliente;
USE apoiocliente;

CREATE TABLE IF NOT EXISTS pedidos (id int NOT NULL AUTO_INCREMENT,nome varchar(255) NOT NULL,email varchar(255) NOT NULL,mensagem varchar(4096) NOT NULL, PRIMARY KEY (id));

