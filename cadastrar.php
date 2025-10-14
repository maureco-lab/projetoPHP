<?php 

 $nome = $_POST['nome'];
 $email= $_POST['email'];

 if ($nome=="MAURICIO" && $email=="mauricio@etec.com") {
 	echo "Bem vindo $nome!!";
 	
 } else {
 	echo "Usuario Invalido!";
 }
 


 ?>