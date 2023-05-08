<?php
// exclui arquivo Arquivo.txt

//verifica a existencia do arquivo, caso ele exista, é excluido (unlink)
if (file_exists("votos.txt")) {
    unlink('votos.txt');
}    

header('Location: indexVota.php');

?>