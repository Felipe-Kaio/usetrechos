<?php
session_start();

require_once('controllers/ProdutoController.php');
require_once('controllers/CarrinhoController.php');

if(!isset($_GET['id'])){

    die("Produto não encontrado");
}

$id = $_GET['id'];

$produto = ProdutoController::buscarProduto($id);

if(!$produto){

    die("Produto não existe");
}

CarrinhoController::adicionar($produto);

header('Location: carrinho.php');
exit;