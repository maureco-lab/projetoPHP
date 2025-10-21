<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Formulário de Cadastro</title>
</head>
<body>

	
	<main class="container">
		<h1>Cadastro de Usuários</h1>
		<form action="include/cadastrar.php" method="post">
			<div class="md-3">
				<label for="primeiroNome">Primeiro Nome</label>
				<input type="text" name="primeiroNome" id="primeiroNome" placeholder="Nome" maxlength="50" required autofocus>
			</div>
			<div class="md-3">
				<label for="segundoNome">Segundo Nome</label>
				<input type="text" name="segundoNome" id="segundoNome" placeholder="Sobrenome" maxlength="50" required>
			</div>
			<div class="md-3">
				<label for="escolhaPets" id="escolhaPets" name="escolhaPets">Escolha seu Pet</label>
			</div>
			<div class="md-3">
				<select>
					<option value="nenhum" >Nenhum</option>
					<option value="cachorro" >Cachorro</option>
					<option value="gato" >Gato</option>
					<option value="peixe" >Peixe</option>
					<option value="passaro" >Pássaro</option>		
					<option value="boi" >Boi</option>		
					<option value="pato" >Pato</option>		
				</select>
			</div>
			<div class="md-3">
				<button class="btn btn-primary" type="submit">Enviar</button>
				<button class="btn btn-primary" type="reset">Limpar</button>
			</div>
		</main>	

	</form>










	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>