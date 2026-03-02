<?php 

require_once "Controller/ProdutoController.php"; 

$produtoController = new ProdutoController(); 
$route = $_GET["route"] ?? '';

switch ($route) {
    case 'produto/telaCadastro':
        $produtoController ->telaCadastro(); 
        break;

    case 'produto/Salvar':
        $produtoController->cadastrar();
        break;

    case 'produto/listar':
        $produtoController->listarProduto();
        break;

    case 'produto/telaEditar':
        $produtoController->telaEditar();
        break;

    case 'produto/atualizar':
        $produtoController->atualizar();
        break;

    case 'produto/excluir':
        $produtoController->excluir();
        break;

    default:
        echo 'Página não Encontrada!';
        break;
}