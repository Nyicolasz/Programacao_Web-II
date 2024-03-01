<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

	<?php if ($username == 'nycolaslf@' && $password == '123') {
		echo "<h1>Logado com sucesso</h1>";
		exit;
	} else {
		echo "<h1>Não foi possivel LOGAR</h1>";
		exit;
	}
    ?>
</body>
</html>