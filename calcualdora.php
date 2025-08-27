<?php 

	function somar($num1, $num2){

		return($num1 + $num2);
	}

	function subtrair($num1, $num2){

		return($num1 - $num2);
	}

	function mulltiplicar($num1,$num2){

		return($num1 * $num2);
	}

	function dividir($num1, $num2){

		return($num1 / $num2);
	}

	$opcao= 4;
	$num1=5;
	$num2=5;


	if ($opcao==1) {
		echo ("Números digitados: $num1 , $num2 <br/>");
		echo ("Calculo escolhido: soma <br/>");
		echo ("O resultado é: ");
		$resposta = somar($num1, $num2);
		echo ($resposta);

	} elseif ($opcao==2) {
		echo ("Números digitados: $num1 , $num2 <br/>");
		echo ("Calculo escolhido: subtração <br/>");
		echo ("O resultado é: ");
		$resposta = subtrair($num1, $num2);
		echo ($resposta); 
	
	} elseif ($opcao==3) {
		echo ("Números digitados: $num1 , $num2 <br/>");
		echo ("Calculo escolhido: mulltiplicação <br/>");
		echo ("O resultado é: ");
		$resposta = mulltiplicar($num1, $num2);
		echo ($resposta); 
	
	} elseif ($opcao==4) {
		echo ("Números digitados: $num1 , $num2 <br/>");
		echo ("Calculo escolhido: divisão <br/>");
		echo ("O resultado é: ");
		$resposta = dividir($num1, $num2);
		echo ($resposta); 
	
	} 
 ?>