<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Erro
 *
 * @author allan
 */
class Erro {
    
    public static function trataErro(Exception $e){
        if(DEBUG){
            echo '<pre>';
            print_r($e);
            echo '</pre>';
        } else{
            echo $e->getMessage();  
        }
        exit();
    } 
}
