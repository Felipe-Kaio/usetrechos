<?php

include('controllers/ProdutoController.php');

$produtos = ProdutoController::listarProdutos();

include('includes/header.php');

include('views/homeView.php');

include('includes/footer.php');