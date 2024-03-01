<?php
//Importação
require_once("pessoa.class.php");
//Nome da classe
class Execucao{
    //Pbjeto pessao com visibilidade privada
    private $pessoa;

    public function _construct(){
        //Criado um objeto chamdao "pessoa" que recebe a classe "pessoa"
        $pessoa = new Pessoa();
        //Passar um valor para o metodo setNome
        $pessoa ->setNome("Nycolas Lima FIlho");
        echo $pessoa->getNome();

    }
}new Execucao();

?>