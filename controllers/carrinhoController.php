<?php
class CarrinhoController {

    public static function adicionar($produto){

        $id = $produto['id'];

        if(!isset($_SESSION['carrinho'])){

            $_SESSION['carrinho'] = [];
        }

        // Se produto já existe no carrinho
        if(isset($_SESSION['carrinho'][$id])){

            $_SESSION['carrinho'][$id]['quantidade']++;

        } else {

            $_SESSION['carrinho'][$id] = [

                'produto' => $produto,
                'quantidade' => 1
            ];
        }
    }

    public static function listar(){

        if(isset($_SESSION['carrinho'])){

            return $_SESSION['carrinho'];

        } else {

            return [];
        }
    }

    public static function aumentar($id){

        if(isset($_SESSION['carrinho'][$id])){

            $_SESSION['carrinho'][$id]['quantidade']++;
        }
    }

    public static function diminuir($id){

        if(isset($_SESSION['carrinho'][$id])){

            $_SESSION['carrinho'][$id]['quantidade']--;

            if($_SESSION['carrinho'][$id]['quantidade'] <= 0){

                unset($_SESSION['carrinho'][$id]);
            }
        }
    }

    public static function remover($id){

        if(isset($_SESSION['carrinho'][$id])){

            unset($_SESSION['carrinho'][$id]);
        }
    }
}