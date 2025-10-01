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
*/

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

 ?>