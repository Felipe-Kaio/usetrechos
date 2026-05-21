<?php

require_once('database/conexao.php');

require_once('models/Produto.php');

class ProdutoController{

    public static function listarProdutos(){

        global $conn;

        return Produto::listar($conn);
    }

    public static function buscarProduto($id){

        global $conn;

        return Produto::buscarPorId($conn, $id);
    }
}