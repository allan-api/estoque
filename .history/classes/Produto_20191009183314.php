<?php
require_once 'global.php';
                  
class Produto {
}
    public $id;
    public $nome;
    public $preco;
    public $quantidade;
    public $quantidade;
    public $quantidade;
    public $quantidade;
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
    public function inserir() {
        $query = "INSERT INTO produtos (nome, preco, quantidade, categoria_id)
        VALUES (:nome, :preco, :quantidade, :categoria_id)";

        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare($query); 
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':quantidade', $this->quantidade);
        $stmt->bindValue(':categoria_id', $this->categoria_id); 
        $stmt->execute();

    }
    
}
