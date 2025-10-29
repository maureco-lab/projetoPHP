<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulários Sessão</title>

	<?php 

		session_start();
	 ?>
</head>
<body>

	<b>Funcionário:</b> <?php echo $_SESSION['nome'];?>, logado com sucesso!.<br/>
	<b>Data de Conexão:</b> <?php echo date("d/m/Y"); ?><br/>
	<b>Hora da Conexão: </b> <?php echo date("H:i:s"); ?><br/>

	<a href="sessoes_valida_formulario.php">Área do Administrador</a>

</body>
</html>