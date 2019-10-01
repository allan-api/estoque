<?php
require_once 'classes/config.php';

//passar o nome do metodo que carrega o autoload;
spl_autoload_register('carregaClasse');
function carregaClasse($nomeClasse)
{
    if(file_exists('classes/' . $nomeClasse . '.php')){
        require_once 'classes/' . $nomeClasse . '.php';
    }
}
