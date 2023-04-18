<?php

// define o fuso horário
date_default_timezone_set('America/Sao_Paulo');

// obtém a data e hora atuais
$Hora = date('d/m/Y H:i:s');

// exibe a data e hora atuais
echo "Data e Hora atuais: " . $Hora;

while(date('s') != date('')){

    header('Refresh:1');
}
?>