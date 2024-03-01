<?php
//Pega dados do formulário ($Arquivo)
$Arquivo = filter_input(INPUT_POST, 'tarefa', FILTER_SANITIZE_SPECIAL_CHARS);

// escreve dados $Arquivo no final do arquivo Arquivo.txt (FILE_APPEND)
if ($Arquivo) {
   file_exists("Arquivo.txt") ? $text =  "\n".$Arquivo : $text = $Arquivo;
   file_put_contents('Arquivo.txt', $text, FILE_APPEND);      
}

header('Location: ler.php');





/*"filter_input" é usada para obter a variável externa específica por nome e filtrá-la. 
Esta função é usada para validar variáveis ​​de fontes não seguras, como entrada do usuário do formulário*/

//"file_exists" procura a existrncia de um arquivo

// ? = operador Nullsafe verifica se o resultado dos métodos ou propriedades é null

/*  função file_put_contents() é uma função embutida que é usada para escrever uma string em um arquivo.ela verifica o 
arquivo no qual o usuário deseja escrever e se o arquivo não existir, ele cria um novo arquivo.  OS parâmetros é o caminho do arquivo.*/

/*é usada para enviar um cabeçalho HTTP bruto. As funções HTTP são aquelas funções que manipulam as informações enviadas ao cliente ou 
navegador pelo servidor Web, antes que qualquer outra saída seja enviada.*/
?>

