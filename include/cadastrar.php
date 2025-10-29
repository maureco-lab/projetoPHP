<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// code...
	$primeiroNome= $_POST["primeiroNome"];
	$segundoNome= $_POST["segundoNome"];


	echo ($primeiroNome . "-" . $segundoNome ."</br>");

	

} else{
	echo "IHHHHHHU";
}


if (isset($_POST['escolhaPets'])) {
	echo "Você escolheu". "-" . $_POST['escolhaPets'];
	echo "</br>";

}




 if (isset($_POST['lasanha'])) {
 	echo "Você escolheu Lasanha";
 	echo "<br>";
 }
 if (isset($_POST['feijoada'])) {
 	echo"Você escolheu Feijoada";
 	echo "<br>";
 }
 if (isset($_POST['baiao'])) {
 	echo "Você escolheu Baião";
 	echo "<br>";
 	
 }
 if (isset($_POST['churrasco'])) {
 	echo "Você escolheu Churrasco";
 	echo "<br>";
 }

 if (isset($_POST['estado_civil'])) {
 	echo "Você está ". $_POST['estado_civil'];
 	echo "</br>";
 }

echo '<a href="../index.php">Voltar</a> </br>';
 ?>