<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário - Maior Time de SP</title>
</head>
<body>

	<form action="exercicio_voto.php" method="get">
		<h2>Qual o maior time de São Paulo? Sem clubismo (Sabendo que é o São Paulo FC)</h2>

		<input type="radio" id="sao_paulo" name="voto" value="Sao Paulo">
		<label for="sao_paulo">São Paulo</label>

		<input type="radio" id="santos" name="voto" value="Santos">
		<label for="santos">Santos</label>

		<input type="radio" id="corinthians" name="voto" value="Corinthians">
		<label for="corinthians">Corinthians</label>

		<input type="radio" id="palmeiras" name="voto" value="Palmeiras">
		<label for="palmeiras">Palmeiras</label>

		<br>
		<br>

		<input type="submit" name="enviar">

	</form>

</body>
</html>