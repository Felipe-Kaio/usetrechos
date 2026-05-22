<?php
session_start();

require_once('controllers/CarrinhoController.php');

$id = $_GET['id'];

CarrinhoController::aumentar($id);

header('Location: carrinho.php');