<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $cookie_name = $_POST['login'];
  $cookie_value = $_POST['senha'];

  // Define o cookie (Fim do CODE explica mais)
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Formulario com bootstrap</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>




  <div class="container text-center">
    <div class="row">

      <div class="col">
        &nbsp
      </div>

      <div class="col">

        <form method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="login" name="login">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="senha" name="senha">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button> <br><br>
        </form>

      </div>

      <div class="col">
        &nbsp
      </div>



    </div>
  </div>
</body>
<!-- 
  
setcookie() -    usada para criar um novo cookie ou atualizar um cookie existente

$cookie_name: Este é o nome do cookie. Usa esse nome para acessar o valor do cookie mais tarde.

time() + (86400 * 30): Isso define quando o cookie deve expirar. 
time() retorna a hora atual em segundos desde a época Unix (1 de janeiro de 1970 00:00:00 GMT). 
86400 é o número de segundos em um dia, então 86400 * 30 é o número de segundos em 30 dias. Portanto, esse cookie expirará em 30 dias 
a partir de agora.

"/": Isso define o caminho no servidor para o qual o cookie estará disponível. Se definido como '/', o cookie estará disponível em 
todo o domínio. Se definido como '/foo/', o cookie estará disponível apenas no diretório /foo/ e em todos os 
subdiretórios de /foo/ no domínio.


-->
</html>

