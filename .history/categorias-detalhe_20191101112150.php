<?php require_once 'global.php'?>
<?php 
    try {
        $id = $_GET['id'];

        $categoria = new Categoria($id);

    } catch (Exception $e) {
        Erro::trataErro($e);
    }

?>
<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Detalhe da Categoria</h2>
    </div>
</div>

<dl>
    <dt>ID</dt>
    <dd><?php echo $categoria->id?></dd>
    <dt>Nome</dt>
    <dd><?php echo $categoria->nome?></dd>
    <dt>Produtos</dt>
    <dd>
        <ul>
            <li><a href="/produtos-editar.php">Senhor dos Aneis</a></li>
            <li><a href="/produtos-editar.php">O Guia do Mochileiro das Galáxias</a></li>
        </ul>
    </dd>
</dl>
<?php require_once 'rodape.php' ?>
