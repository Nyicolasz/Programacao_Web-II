<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Links para usar o Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Leitura_Gravacao_Arquivos</title>
  </head>


  <body style="background-color: rgb(195, 195, 195);">

    <!--Parte superior-->

    <div class="container text-center"><!--div usada para conter no centro-->
      <div class="row"><!--div da linha-->

        <div class="col-1"><!--Primeira coluna-->
          &nbsp;
        </div><!--Fechando a primeira coluna-->

        <div class="col"><!--coluna do centro-->

          <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark" style="padding-left: 9px;"><!--Usando os botoes de navaegação-->

            <div class="container-fluid">
              <a class="navbar-brand" href="#">SISTEMA WEB</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Escrever no Arquivo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ler.php">Leitura do Arquivo</a>
                  </li>
                </ul>
              </div>
            </div>

          </nav><!--Fechando os botões de navegação-->

        </div><!--Fechando a coluna do centro-->

        <!--Terceira coluna-->
        <div class="col-1">
          &nbsp;
        </div><!--Fechadno a terceira coluna-->

      </div><!--Fechando div da linha-->
    </div><!--Fechando a div do centro-->

    <!--Parte inferior-->

    <div class="container text-left"><!--div para colocar as palavras na esquerda-->

      <div class="row"><!--Div da linha-->

        <div class="col-1"><!--Primeira coluna-->
          &nbsp;
        </div><!--Fechando a primeira coluna-->


        <div class="col"><!--Coluna do centro-->

          <div class="p-4" style="background-color: white;"><!--div usada da cor e do espaçamento-->

            <!--"method="POST" são para dados são postados internamente. Puxando o outro arquivo.php-->
            <form method="POST" action="Resultado.php"><!--inicio do form-->
    <p>Qual é a sua opção preferida?</p>
    <input type="radio" name="opcao" value="opcao1"> Etec ZL<br>
    <input type="radio" name="opcao" value="opcao2">  Etec Tereza Nunes <br>
    <input type="radio" name="opcao" value="opcao3">  Etec São Mathues<br>
    <input type="radio" name="opcao" value="opcao4">  Etec Santa Ifigênia<br>


              <button type="submit" class="btn btn-primary">Salvar</button>
            
            </form><!--Fechando form-->
          </div><!--Fechadno div da cor e do espaçamento-->
        </div><!--Fechando a coluna do centro-->

        <!--Terceira coluna-->
        <div class="col-1">
          &nbsp;
        </div><!--Fechadno a terceira coluna-->

      </div><!--Fecahndo div da linha-->
    </div><!--FEchando div que coloca na esquerda-->

  </body>

</html>