

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

<body style="background-color: rgb(195, 195, 195);">

    <div class="container text-center ">

        <div class="row">
           
                <div class="col-1">
                    &nbsp;
                </div>

                <div class="col bg-primary">
      
                        <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">SISTEMA WEB</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <div class="navbar-nav">
                                        <a class="nav-link active" aria-current="page" href="index.php">Escrever no Arquivo</a>
                                        <a class="nav-link"  href="ler.php">Leitura do Arquivo</a>
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
                       <h5 style="text-align: left;"><b>Escrever - Salvar informações no arquivo</b></h5>

                       <div class="container text-center">

                            <div  class="row" style="background-color: rgb(201, 201, 201); margin: 1cm;">
    
                                <div class="col">
                                    <?php
                                        // pega dados do arquivo Arquivo.txt e coloca na tela 
                                        if (file_exists("Arquivo.txt")) {
                                            echo '<b>Arquivo.txt</b><br/><br/><br/>';
                                            $lista = file_get_contents("Arquivo.txt");
                                            $lista_array = explode("\n", $lista);
                                            foreach($lista_array as $lista_item) {
                                                echo $lista_item.'<br/><br/><br/>';
                                            }
                                        } else {
                                            echo 'Não foi digitado nada no arquivo. Por favor, aperte no botão de navegação "Escrever no Arquivo" e digite algo.';
                                            $lista = null;
                                        }

                                    ?>
                                </div>
    
                            </div>
                        </div>

                    
                        <button style="margin-top: 2px;"  onclick="window.location.href = 'delete.php'" class="btn btn-danger">Excluir Lista</button>
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


