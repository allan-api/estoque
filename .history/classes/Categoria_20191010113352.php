<?php

    class Categoria
    {
        public $id;
        public $nome;

        public function __construct($id = false) {
            if($id) {
                $this->id = $id;
                $this->carregar();
            }
        }
        public static function listar() {
            $query = "SELECT id, nome FROM categorias ORDER BY nome";
            $con = Conexao::getConexao();
            $resultado = $con->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
        }
       
        public function carregar() {
            $query = "SELECT id, nome FROM categorias WHERE id = :id";
            $con = Conexao::getConexao();
            $stmt = $con->prepare($query); 
            $stmt->bindValue(':id', $this->id);
            $linha = $stmt->fetch(); 
            $this->nome = $linha['nome'];

            // pode ser feito usando o fetchAll e pegando a primeira linha
            // $lista = $stmt->fetchAll();
            // foreach($lista as $linha):
            //     $this->nome = $linha['nome'];
            // endforeach;
        }
        
        public function inserir() {
            $query = "INSERT INTO categorias (nome) VALUES (' :nome ')";  
            $con = Conexao::getConexao();
            $stmt = $con->prepare($query);
            $stmt->bindValue(':nome', $this->nome);
            $stmt->execute();
        }
        
        public function atualizar() {
            $query = "UPDATE categorias set nome = '" . $this->nome . "' WHERE id = '" . $this->id . "'";
            $con = Conexao::getConexao();
            $resultado = $con->exec($query);
            
        }
        
        public function Excluir() {
            $query = "DELETE FROM categorias WHERE id = " . $this->id; 
            $conexao = Conexao::getConexao();
            $conexao->exec($query);
        }
    }