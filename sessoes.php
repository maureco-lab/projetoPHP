<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sessões</title>
</head>
<body>


	<?php 


		session_start();

		$_SESSION['nome'] = "Administrador";


		session_unset();

	 ?>

		<h3>Sessão de Usuario</h3>
		Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>

</body>
</html>