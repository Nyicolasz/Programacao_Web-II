<?php
//Importação
require_once("automovies.class.php");

class Execucao{

    private $carro1;

    public function __construct(){

        //Objeto "Carro1" refente a Porsche
        $carro1 = new Automoveis();

        //Atribuindo os valores de cada Set
        $carro1 -> setTipo("<b>Tipo:</b> Porsche" . "<br>");
        $carro1 -> setCor("<b>Cor:</b> Cinza" . "<br>");
        $carro1 -> setPlaca("<b>Placa:</b> MHZ-4345" . "<br>");
        $carro1 -> setNportas("<b>Números de portas:</b> 2" . "<br><br>");

        //Mostrando o valor de cada objeto
        echo $carro1->getTipo();
        echo $carro1->getCor();
        echo $carro1->getPlaca();
        echo $carro1->getNportas();

         //Objeto "Carro2" refente a Ferrari
         $carro2 = new Automoveis();

        //Atribuindo os valores de cada Set
         $carro2 -> setTipo("<b>Tipo:</b> Ferrari" . "<br>");
         $carro2 -> setCor("<b>Cor:</b> Vermelho" . "<br>");
         $carro2 -> setPlaca("<b>Placa:</b> JKL-0001" . "<br>");
         $carro2 -> setNportas("<b>Números de portas:</b> 4" . "<br>");
 
         //Mostrando o valor de cada objeto
         echo $carro2->getTipo();
         echo $carro2->getCor();
         echo $carro2->getPlaca();
         echo $carro2->getNportas();
    }
    
}new Execucao();

?>