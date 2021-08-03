CREATE DATABASE badil;

USE badil;

CREATE TABLE `clienti`(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nome CHAR(52) NOT NULL,
  cliente CHAR(52) NOT NULL,
  insegna CHAR(52) NOT NULL,
  data_inizio DATE,
  data_fine DATE,
  attiva INT(1)
); 

INSERT INTO `clienti` (nome, cliente, insegna, data_inizio, data_fine, attiva) VALUES ('circle 21','circle','circle','20081111', '20091111', 1);
INSERT INTO `clienti` (nome, cliente, insegna, data_inizio, data_fine, attiva) VALUES ('Sqaure 1','Square','Square','20091111', '20101111', 1);
INSERT INTO `clienti` (nome, cliente, insegna, data_inizio, data_fine, attiva) VALUES ('Enix 2','Enix','Enix','20111111', '20121111', 1);
INSERT INTO `clienti` (nome, cliente, insegna, data_inizio, data_fine, attiva) VALUES ('Capcom 35','Capcom','Capcom','20141111', '20161111', 1);
INSERT INTO `clienti` (nome, cliente, insegna, data_inizio, data_fine, attiva) VALUES ('Infograph 36','Infograph','Infograph','20191111', '20201111', 1);
INSERT INTO `clienti` (nome, cliente, insegna, data_inizio, data_fine, attiva) VALUES ('Ken 35','Ken','Ken','20201111', '20211111', 1);


ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '7%bUkNb&';

