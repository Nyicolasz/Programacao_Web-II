<?php
// exclui arquivo Arquivo.txt

//verifica a existencia do arquivo, caso ele exista, é excluido (unlink)
if (file_exists("Arquivo.txt")) {
    unlink('Arquivo.txt');
}    

header('Location: index.php');

?>