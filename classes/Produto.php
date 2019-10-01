<?php
require_once 'global.php';



class Produto {

    public $id;
    public $nome;
    public $preco;
    public $quantidade;
    public $categoria_id;
    
    public function listar() {
        $query = "SELECT p.id, p.nome, preco, quantidade, categoria_id, c.nome as categoria_nome
                        FROM produtos p
                        INNER JOIN categorias c ON p.categoria_id = c.id
                        ORDER BY p.nome";
        $conexao = Conexao::getConexao();
        $resultado = $conexao->query($query); //usa-se query quando tem retorno, e exec quando não
        $lista = $resultado->fetchAll();
        
        return $lista;
        
    }
    
}
