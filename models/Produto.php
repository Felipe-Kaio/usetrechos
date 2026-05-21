<?php

class Produto{

    public static function listar($conn){

        $sql = "SELECT * FROM produtos";

        return $conn->query($sql);
    }

    public static function buscarPorId($conn, $id){

    $sql = "SELECT * FROM produtos WHERE id = $id";

    $resultado = $conn->query($sql);

    return $resultado->fetch_assoc();
}
}