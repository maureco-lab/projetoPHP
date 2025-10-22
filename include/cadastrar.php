<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// code...
	$primeiroNome= $_POST["primeiroNome"];
	$segundoNome= $_POST["segundoNome"];
	$escolhaPets= $_POST["escolhaPets"];

	echo ($primeiroNome . "-" . $segundoNome . "-" . $escolhaPets);

	echo '<a href="../index.php">Voltar</a>';

} else{
	echo "IHHHHHHU";
}



 ?>