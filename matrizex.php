<?php 

/*
$ma= array(
	array(25,12, 35),
	array(85, 47, 98),
	array(32, 38, 105));


$mb= array(
	array(98,65, 35),
	array(5, 27, 8),
	array(74, 14, 3));

$mr= array(
	array(),
	array(),
	array(),);

for ($l=0; $l <3 ; $l++) { 
	for ($c=0; $c < 3; $c++) { 
		$mr[$l][$c]= $ma[$l][$c] + $mb[$l][$c];
		// code...
	}
	// code...

}
echo("<pre/>");
print_r($mr);
================================================



$ma= array(
	array(25,12, 35),
	array(85, 47, 98),
	array(32, 38, 105));


$mb= array(
	array(98,65, 35),
	array(5, 27, 8),
	array(74, 14, 3));

$mr= array(
	array(),
	array(),
	array(),);

for ($l=0; $l <3 ; $l++) { 
	for ($c=0; $c < 3; $c++) { 
		$mr[$l][$c]= $ma[$l][$c] + $mb[$l][$c];
		// code...
	}
	// code...

}

$mra=0;
$mrb=0;
$mrr=0;

for ($l=0; $l <3 ; $l++) { 
	for ($c=0; $c < 3; $c++) { 
		$mra= $mra + $ma[$l][$c];
		$mrb= $mrb + $mb[$l][$c];
		$mrr= $mrr + $mr[$l][$c];
		// code...
	}
	// code...
}
echo("<pre/>");
print_r("Matriz 1: $mra");

echo("<pre/>");
print_r("Matriz 2: $mrb");

echo("<pre/>");
print_r("Matriz R: $mrr");

====================================


$al= array(
	array("n" =>"João", "a" => 10),
	array("n" =>"Pedro","a" => 7),
	array("n" =>"Jorge","a" => 8),
	array("n" =>"Cléebert","a" => 7),
	array("n" =>"Marcia","a" => 10),
	array("n" =>"Lúcia","a" => 5),
	array("n" =>"Alessandra","a" => 10),
	array("n" =>"Lulu","a" =>5),
	array("n" =>"Manu","a" =>2),
	array("n" =>"Theo","a" => 5));

$soma=0;
$maiorn=0;
$alunomaior="";

foreach ($al as $aluno) {
	$soma= $soma + $aluno['a'];
	if ($aluno['a'] > $maiorn) {
		$maiorn= $aluno['a'];
		$alunomaior= $aluno['n'];
		// code...
	}
	// code...
}
$media = $soma /10;	
echo ("O aluno com maior notá é: $alunomaior <br/>");
echo ("A média de nota da turma é : $media");

=====================================



$ano= array(
	array("Mes" => "Janeiro", "N" => 1),
	array("Mes" => "Fevereiro", "N" => 2),
	array("Mes" => "Março", "N" => 3),
	array("Mes" => "Abril", "N" => 4),
	array("Mes" => "Maio", "N" => 5),
	array("Mes" => "Junho", "N" => 6),
	array("Mes" => "Julho", "N" => 7),
	array("Mes" => "Agosto", "N" => 8),
	array("Mes" => "Setembro", "N" => 9),
	array("Mes" => "Outubro", "N" => 10),
	array("Mes" => "Novembro", "N" => 11),
	array("Mes" => "Dezembro", "N" => 12)
);

$mes=1;

foreach ($ano as $valor) {
	if ($mes == $valor['N']) {
		echo $valor['Mes'];
		
	}
	
}
*/

$pessoa= array(
	array("nome" =>"Miro", "cidade" => "Jericuacuara", "idade" =>28 , "sexo"=> "M"),
	array("nome" =>"Cleuza", "cidade" => "Pintopolis", "idade" =>12 , "sexo"=> "F"),
	array("nome" =>"Braune", "cidade" => "Santos", "idade" =>39 , "sexo"=> "M"),
	array("nome" =>"Kéké", "cidade" => "São Paulo", "idade" =>33 , "sexo"=> "M"),
	array("nome" =>"Linóia", "cidade" => "Rio de Janeiro", "idade" =>20 , "sexo"=> "F"),
	array("nome" =>"Mayra", "cidade" => "Grajaú", "idade" =>26 , "sexo"=> "F"),
	array("nome" =>"Joseph", "cidade" => "Washington", "idade" =>11 , "sexo"=> "M"),
	array("nome" =>"Juninho", "cidade" => "Prainha", "idade" =>50 , "sexo"=> "M"),
	array("nome" =>"Jade", "cidade" => "Santos", "idade" =>12 , "sexo"=> "F"),
	array("nome" =>"Aparecida", "cidade" => "Santos", "idade" =>18, "sexo"=> "F")
);

/*
//Listar nome e idade
foreach($pessoa as $valor){
		echo $valor['nome']," ", $valor['idade'] ."<br/>";
	// code...
}


//Listar nomes de quem mora em Santos
foreach ($pessoa as $valor) {
	if ($valor['cidade'] =="Santos") {
		echo $valor['nome'] . " mora em Santos" . "<br/>";
		// code...
	}
	// code...
}


//Listar pessoas com mais de 18 anos
foreach ($pessoa as $valor) {
	if ($valor['idade'] > 18) {
		echo $valor['nome']. " tem mais de 18 anos <br/>";
		// code...
	}
	// code...
}

*/

//Listar quantos do sexo masculino
$cont=0;
foreach ($pessoa as $valor) {
	if ($valor['sexo'] == "M") {
		$cont++;
	}
	
}
echo ("$cont são do sexo Masculino");
 ?>