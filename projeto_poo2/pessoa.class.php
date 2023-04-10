<?php

class Pessoa{
    private $nome;
    private $telefone;
    private $origem;
    private $datacontato;
    private $observacao;

   // Metodo de captura de valor de objeto
   public function getNome(){
    return $this-> nome;
}
// Metodo de alteração de valor de objeto
public function setNome($nome){
    $this->nome = $nome;
    

}

public function getTelefone(){
    return $this->telefone;
}

public function setTelefone($telefone){
    $this->telefone = $telefone;


}

public function getOrigem(){
    return $this->origem;
}

public function setOrigem($origem){
    $this->origem = $origem;

 
}

public function getDataContato(){
    return $this->datacontato;
}

public function setDataContato($datacontato){
    $this->datacontato = $datacontato;


}

public function getObservacao(){
    return $this->observacao;
}

public function setObservacao($observacao){
    $this->observacao = $observacao;


}


}


?>