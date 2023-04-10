<?php

require_once("pessoa.class.php");


    
        $pessoa = new Pessoa();

        //pega o que foi digitado e mostra
        $pessoa->setNome($_POST['nome']);
       

        $pessoa->setTelefone($_POST['telefone']);
       
        
        $pessoa->setOrigem($_POST['origem']);
        
        
        $pessoa->setDataContato($_POST['datacontato']);

        $pessoa->setObservacao($_POST['observacao']);
        

        

        

    

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--Links para usar o Bootstrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <title>ProjetoWeb</title>
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
                    <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Consultar</a>
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

          <h5><b>Cadastrar - Agendamento de Potenciais Clientes</b></h5>

            <div class="container text-center ">
              <div class="row bg-primary fw-bold">

                <div class="col" style=>
                  Nome
                </div>

                <div class="col">
                  Telefone
                </div>

                <div class="col">
                  Origem
                </div>

                <div class="col">
                  Contato
                </div>

                <div class="col">
                  Observação
                </div>

                

              </div>

              <div class="container text-center">
                <div class="row">

                  <div class="col">
                  <?php echo $pessoa->getNome()?>
                  </div>

                  <div class="col">
                  <?php echo $pessoa->getTelefone()?>
                  </div>

                  <div class="col">
                  <?php echo $pessoa->getOrigem()?>
                  </div>

                  <div class="col">
                  <?php echo $pessoa->getDataContato()?>
                  </div>

                  <div class="col">
                  <?php echo $pessoa->getObservacao()?>
                  </div>
                  
                  
                  
              </div>

            </div>
            </div>


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