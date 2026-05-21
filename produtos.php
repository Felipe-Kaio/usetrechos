<?php

require_once('controllers/ProdutoController.php');

$produtos = ProdutoController::listarProdutos();

include('includes/header.php');

include('views/produtosView.php');

include('includes/footer.php');