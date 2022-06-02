create database testeoo;

use testeoo;

create table tbpessoas(
cod int not null auto_increment primary key,
nome varchar(300),
profissao varchar(300)
);

select * from tbpessoas;