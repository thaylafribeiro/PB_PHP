create database mvc_livro;
use mvc_livro;

create table Livro(
ID integer auto_increment primary key,
Titulo varchar(255),
Autor varchar(255),
Ano_publicação  DATE,
Editora varchar(255)
);

SELECT * FROM livro;