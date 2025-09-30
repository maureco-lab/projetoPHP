<?php 

//          --▶      🔽
// Matriz [Linha] [Coluna] 
//           0        0


/*
$emp= array(
	array(1,"José", 5000),
	array(2, "Maria", 4000),
	array(3, "João", 3000)
);

echo("<pre>");
print_r($emp);

	for ($l=0; $l < 3; $l++ ){ 
		for ($c=0; $c <3 ; $c++) { 
			echo $emp[$l][$c]. "";
			// code...
		}
		echo "<br/>";
	}

*/

	$arr= array('v'=> 'Vermelho', 'e' => 'Verde', 'a'=>'Azul');

	echo("<pre/>");
	foreach ($arr as $key => $value) {
		// code...
		echo $key . "=>" . $value. "\n";
	}

	
	
 ?>