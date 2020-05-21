CREATE DATABASE IF NOT EXISTS dbcontatoprojeto;

USE dbcontatoprojeto;

DROP TABLE IF EXISTS tblcontato;

CREATE TABLE tblcontato (
   `idContato` INTEGER(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(100) NOT NULL,
    `telefone` VARCHAR(14),
    `celular` VARCHAR(15) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `homePage` VARCHAR(100),
    `linkFacebook` VARCHAR(100),
    `profissao` VARCHAR(100) NOT NULL,
    `mensagem` VARCHAR(500) NOT NULL,
    `critica` VARCHAR(100),
    `sexo` VARCHAR(1) NOT NULL

);

