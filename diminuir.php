<?php
session_start();

require_once('controllers/CarrinhoController.php');

$id = $_GET['id'];

CarrinhoController::diminuir($id);

header('Location: carrinho.php');