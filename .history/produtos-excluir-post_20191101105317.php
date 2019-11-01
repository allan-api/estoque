<?php 
    require_once 'global.php';

    try {
        $id = $_GET('id');
        print_r($id);

    header('location: produtos.php');
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

?>