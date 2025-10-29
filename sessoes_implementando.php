<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Implementando Formulários</title>
	<?php 

		if ($_POST) {
			session_start();
			$_SESSION['nome']= $_POST['nome'];
			$_SESSION['senha']= $_POST['senha'];

			header("location:sessoes_formularios.php")
			
		}

	 ?>

</head>
<body>
	<form name="logar" method="post" action="sessoes_implementando.php"></form>
	Nome:<br>
	<input type="text" name="nome"><br>
	Senha:<br>
	<input type="password" name="senha"><br>
	<br>
	<input type="submit" name="enviar" value="Ok">

</body>
</html>