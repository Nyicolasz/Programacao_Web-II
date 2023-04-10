<?php

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        //pega o que foi digitado e mostra
        $pessoa->setNome($_POST['nome']);
        echo "<b>"."Nome: "."</b>" . $pessoa->getNome()."<br><br>";

        $pessoa->setTelefone($_POST['telefone']);
        echo "<b>"."Telefone: "."</b>" . $pessoa->getTelefone()."<br><br>";
        
        $pessoa->setOrigem($_POST['origem']);
        echo "<b>"."Origem "."</b>" . $pessoa->getOrigem()."<br><br>";

        $pessoa->setDataContato($_POST['datacontato']);
        echo "<b>"."Data do contato: "."</b>" . $pessoa->getDataContato()."<br><br>";

        $pessoa->setObservacao($_POST['observacao']);
        echo "<b>"."Observação: "."</b>" . $pessoa->getObservacao()."<br><br>";

        

        

    }
}new Teste();

?>