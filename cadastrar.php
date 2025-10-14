<?php 

 $nome = $_POST['nome'];
 $email= $_POST['email'];

 if ($nome==="MAURICIO" && $email==="mauricio@etec.com") {
 	echo "<table border=1>
 		<tr>
 		<td>Bem vindo</td> 
 		</tr>
 		<td>$nome!! </td>
 		</tr>
 	</table>";
 	
 } else {
 	echo "Usuario Invalido!";
 }
 


 ?>