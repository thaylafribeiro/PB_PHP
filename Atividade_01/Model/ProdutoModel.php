<?php

class Produto{
   private $nome;
   private $valor;
   private $quantidade;
   private $data;

   public function __construct($nome, $valor, $quantidade, $data){
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->data = $data;
   }

   public function Salvar(){
    if(!isset($_SESSION['Produto'])){
        $_SESSION['Produto'] = [];
    }

        $_SESSION['Produto'][] = [
            'nome'=>$this->nome,
            'valor'=>$this->valor,
            'quantidade'=>$this->quantidade,
            'data'=>$this->data,
        ];
        
    }

    public static function listar(){
        return $_SESSION['Produto'] ?? []; 
    }
}