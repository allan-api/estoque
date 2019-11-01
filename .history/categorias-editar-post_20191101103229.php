<?php

require_once '/global.php';

try {
    $nome = $_POST['editarNome'];
    $id = $_POST['id'];
    
    $categoria = new Categoria($id);
    $categoria->nome = $nome;
    $categoria->preco = $preco;
    $categoria->quantidade = $quantidade;
    $categoria->categoria_id = $categoria_id;
    $categoria->atualizar();

    header('Location:categorias.php' );
} catch (Exception $e) {
    Erro::trataErro($e);
}

    