<?php

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        //pega o que foi digitado e mostra
        $pessoa->setNome($_POST['nome']. "<br>");
        echo $pessoa->getNome();

        $pessoa->setEndereco($_POST['endereco']. "<br>");
        echo $pessoa->getEndereco();
        
        $pessoa->setBairro($_POST['bairro']. "<br>");
        echo $pessoa->getBairro();

        $pessoa->setCep($_POST['cep']. "<br>");
        echo $pessoa->getCep();

        $pessoa->setCidade($_POST['cidade']. "<br>");
        echo $pessoa->getCidade();

        $pessoa->setEstado($_POST['estado']. "<br>");
        echo $pessoa->getEstado();

        

    }
}new Teste();

?>