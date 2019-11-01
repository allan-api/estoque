<?php require_once 'global.php' ?>
<?php 
    try{
        $id = $_GET['id'];
        $produto = new Produto($id);
        $listaCategoria = Categoria::listar();
    }catch(Exception $e){
        Erro::trataErro($e)
    }

?>
<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Nova Categoria</h2>
    </div>
</div>

<form action="#" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" value="<?php echo $produto->nome?>" class="form-control" placeholder="Nome do Produto" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço da Produto</label>
                <input type="number" value="<?php echo $produto->preco?>" step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade do Produto</label>
                <input type="number" value="<?php echo $produto->quantidade?>" min="0" class="form-control" placeholder="Quantidade do Produto" required>
            </div>
            <div class="form-group">
                <label for="nome">Categoria do Produto</label>
                <select class="form-control">
                    <?php selected = '' ?>
                    <?php foreach($listaCategoria as $linha){?>
                        <?php
                            if($linha['id'] == $produto->categoria_id){
                                selected = 'selected';
                            }    
                        ?>
                        <option <?php echo selected ?>value="1"><?php echo $linha['nome']?></option>
                        <?php selected = ''?>    
                    <?php }?>
                </select>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
