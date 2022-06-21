create database biblio;
use biblio;
create table cliente (
    id int not null AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null,
    sobrenome varchar(100) not null,
    email varchar(100)not null,
    senha varchar(100)not null
   
);