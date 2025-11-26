	<?php 

	$host = "localhost";
	$user= "admin";
	$pwd= "admin";
	$db= "bdpadaria";

	 $con= mysqli_connect($host, $user, $pwd, $db);

	 if(mysqli_connect_errno()){
	 echo "Banco de Dados não conectado" . mysqli_connect_error();

	} else {

		$sql= " create table tbPesssoas(codPessoa int not null auto_increment,
		nome varchar (100),
		email varchar (100),
		tel char(10),
		primary key (codPessoa))";

		if(mysqli_query($con, $sql)){
		echo "Tabela criada!!";
	};

		mysqli_close($con);
	}
	?>