	<?php 

	$host = "localhost";
	$user= "admin";
	$pwd= "admin";
	$db= "bdloja";

	 $con= mysqli_connect($host, $user, $pwd, $db);

	 if(mysqli_connect_errno()){
	 echo "Banco de Dados não conectado" . mysqli_connect_error();

	} else {
		echo "Banco de Dados conectado!!";
		mysqli_close($con);
	}
	?>