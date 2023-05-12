create database lojaphp;

use lojaphp;

CREATE TABLE IF NOT EXISTS `lojaphp`.`contato` (
  `idcontato` INT NOT NULL auto_increment,
  `nome` VARCHAR(32) NULL DEFAULT NULL,
  `telefone` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `foto` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idcontato`));


CREATE TABLE IF NOT EXISTS `lojaphp`.`usuario` (
  `idusuario` INT NOT NULL auto_increment,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  `senha` VARCHAR(45) NULL DEFAULT NULL,
  `foto` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idusuario`));

CREATE TABLE IF NOT EXISTS `lojaphp`.`produto` (
  `idproduto` INT NOT NULL auto_increment,
  `nome` VARCHAR(32) NULL DEFAULT NULL,
  `descricao` VARCHAR(45) NULL DEFAULT NULL,
  `preco` VARCHAR(45) NULL DEFAULT NULL,
  `foto` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idproduto`));
  
  INSERT INTO `lojaphp`.`usuario` (`nome`, `senha`) VALUES ('admin', 'admin');

SELECT idusuario, nome, senha FROM lojaphp.usuario WHERE nome = 'admin' AND senha = 'admin';
  
  select*from usuario;
  
  drop table produto;
