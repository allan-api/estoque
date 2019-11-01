<?php 
    require_once 'global.php';

    try {
        $id = $_GET('id');
        print_r($id);
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

?>