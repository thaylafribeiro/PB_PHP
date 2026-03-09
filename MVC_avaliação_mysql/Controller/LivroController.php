<?php

session_start(); 
require_once "./Model/LivroModel.php";

class LivroController{

    public function telaCadastro(){
        require "View/livroCadastrar.php";
    }

   public function cadastrar(){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano_publicacao = $_POST['ano_publicacao']; 
    $editora = $_POST['editora'];

     $livro = new Livro($titulo, $autor, $ano_publicacao, $editora);
    $livro->Salvar();
        header('Location: /PB_PHP/MVC_avaliação_mysql/livro/telaCadastro');
exit; 

    public function listarLivro(){
        $livro = Livro::listar();
        echo "<pre>";
        print_r($livro);
        echo"</pre>";
        require 'View/livroListar.php';

    }

    public function telaEditar(){
        $livro = Livro::buscar($_GET['id']); 
        require 'View/livroEditar.php';
    }

    public function atualizar(){
        $livro = new Livro($_POST['titulo'], $_POST['autor'], $_POST['ano_publicacao'], $_POST['editora']);
        $livro->atualizar($_GET['id']);
        header('Location: /PB_PHP/MVC_avaliação_mysql/livro/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Livro::excluir($_GET['id']);
        header('Location: /PB_PHP/MVC_avaliação_mysql/livro/listar');
        exit;
    }
}
}


    