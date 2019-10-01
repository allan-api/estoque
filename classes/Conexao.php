vbh<?php


class Conexao {
    
    public static function getConexao() {
        $con = new PDO(DB_DRIVER . ':host=' . DB_HOSTNAME . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
        return $con;
    }
}
