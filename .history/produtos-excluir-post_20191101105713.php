<?php 
    require_once 'global.php';

    try {
        $id = $_GET['id'];
        print_r($id);
        $produto = new Produto($id);
        $produto->excluir();

    header('location: produtos.php');
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

?>