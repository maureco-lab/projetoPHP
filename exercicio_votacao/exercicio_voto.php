<?php 


$voto= $_GET['voto'];

if (!isset($_COOKIE['voto'])) {
	setcookie("voto" , $voto, time()+1);

	$msg= "Obrigado por votar!!";
	// code...
}

else{
	$msg= "Você já votou uma vez!";
}

echo $msg;



 ?>