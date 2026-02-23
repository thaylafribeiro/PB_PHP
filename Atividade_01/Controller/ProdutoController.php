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
        $quantidade_estoque = $_POST['quantidade'];
        $data_validade = $_POST['data'];

        $produto = new Produto($nome, $valor, $quantidade_estoque, $data_validade);
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

    }