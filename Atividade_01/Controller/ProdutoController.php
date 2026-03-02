<?php

session_start(); 
require_once "./Model/ProdutoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/produtoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $data = $_POST['data'];

        $produto = new Produto($nome, $valor, $quantidade, $data);

        $produto->Salvar();
        header('Location: /PB_PHP/Atividade_01/produto/telaCadastro');
        exit;
    }

    public function listarProduto(){
        $produto = Produto::listar();
        echo "<pre>";
        print_r($produto);
        echo"</pre>";
        require 'View/produtoListar.php';

    }

     public function telaEditar(){
        $produto = Produto::buscar($_GET['id']);
        require 'View/telaEditar.php';
    }

    public function atualizar(){
        $produto = new Produto($_POST['nome'], $_POST['valor'], $_POST['quantidade'], $_POST['data']);
        $produto->atualizar($_GET['id']);
        header('Location: /PB_PHP/Atividade_01/produto/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Produto::excluir($_GET['id']);
        header('Location: /PB_PHP/Atividade_01/produto/listar');
        exit;
    }
}
    