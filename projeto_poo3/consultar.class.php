<?php
    //importacao
    require_once("pessoa.class.php");
    //objeto chamado pessoa que recebe a classe pessoa
    $pessoa = new Pessoa();

    //metodos sets
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
    <title>Projeto Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body class="bg-body-tertiary">

    <div class="container text-center bg-body-tertiary">

        <div class="row">
            <! a tag div class="col" foi utilizada para alinhamento do site em colunas ->
                <div class="col-1">
                    &nbsp;
                </div>

                <div class="col bg-primary">
                    <!implementando o menu ->
                        <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">Sistema WEB</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <div class="navbar-nav">
                                        <a class="nav-link active" aria-current="page" href="index.php"> Cadastrar</a>
                                        <a class="nav-link" href="#">Consultar</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                </div>

                <div class="col-1">
            &nbsp;
          </div>
        </div>

            <div class="row">
            <div class="col-1">
              &nbsp;
              </div>
             
                <div class="col bg-white">
                  &nbsp;
                 </div>

                 <div class="col-1">
                  &nbsp;
              </div>
          </div>
          
          <div class="row">
            <div class="col-1">
              
              &nbsp;
          </div>

            <div class="col bg-white">
                <!implementando a tabela ->
                    <div bs-primary >
                    <div class="col bg-white d-flex justify-content-center">
                       <div>
                       <h3 class="text-start fs-5">Consultar - contatos agendados</h3>

                        <table widht="50%" border=0 cellpadding="10" cellspacing=0 align=center>
                            
                                <tr align=center bgcolor=#007BFF>
                                    <th widht=10%>Nome</th>
                                    <th widht=8%>Telefone</th>
                                    <th widht=8%>Origem</th>
                                    <th widht=8%>Data do contato</th>
                                    <th  widht=8%>Observação</th>

                                    <div class="container text-center">

                                </tr>                                                     
                                <tr>
                                                       
                                    <td widht=8% ><?php echo $pessoa->getNome()?></td>
                                    <td widht=8% ><?php echo $pessoa->getTelefone()?></td>
                                    <td widht=8% ><?php echo $pessoa->getOrigem()?></td>
                                    <td widht=8% ><?php echo $pessoa->getDataContato()?></td>
                                    <td widht=8% ><?php echo $pessoa->getObservacao()?></td>
                                </tr>
                        </table>
                    </div>
                </div> 
            </div>
            </div>

            <div class="col-1">
                &nbsp;
            </div>
        

        </div>
    </div>
</body>

</html>



