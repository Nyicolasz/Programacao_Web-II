<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>

    <?php
    session_start();

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $cookie_name = $_POST['login'];
        $cookie_value = $_POST['senha'];

        // Define o cookie (Fim do CODE explica mais)
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        header("Sessao.php");
    }
    ?>

    <div class="container text-center">
        <div class="row">

            <div class="col">
                &nbsp;
            </div>

            <div class="col">


                <p class="fs-2">

                    <?php

                    if (!isset($_COOKIE[$_SESSION['login']])) {
                        echo "Cookie named '" . $_SESSION['login'] . "' is not set!";
                    } else {

                        echo "USANDO SESSÃO <br><br>";
                        echo "LOGIN: " . $cookie_name . " <br><br>";
                        echo "SENHA: " . $cookie_value;
                    }

                    ?>

                </p>
            </div>

            <div class="col">
                &nbsp;
            </div>

        </div>
    </div>

</body>

</html>