<?php
session_start();

require_once('controllers/CarrinhoController.php');

$carrinho = CarrinhoController::listar();

include('includes/header.php');

include('views/carrinhoView.php');

include('includes/footer.php');
