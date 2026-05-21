<?php

require_once('controllers/ProdutoController.php');

if(!isset($_GET['id'])){

    die("Produto não encontrado");
}

$id = $_GET['id'];

$produto = produtoController::buscarProduto($id);

include('includes/header.php');

include('views/produtoView.php');

include('includes/footer.php');