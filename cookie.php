<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testando os cookies</title>
</head>
<body>

	<?php 

		if (isset($_COOKIE['Ocupacao'])) {
			echo "Bem vindo " . $_COOKIE['Ocupacao'] . "! <br>";
		}
		else {
			echo "Usuário novo, seja bem vindo!<br>";
		}

		?>
</body>
</html>