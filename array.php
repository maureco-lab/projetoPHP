<?php 
/*
$aluno = array();

$aluno[0]= "Cléber";
$aluno[1]= "Jonas";
$aluno[2]= "Claúdia";
$aluno[3]= "Hebert";

echo ($aluno[0] . "</br>" . $aluno[1]);



$nomes= array("Josúe", "Jacó", "Daniel");

echo("$nomes[0] $nomes[1] $nomes[2] </br>");


$email[]= "junior@gmail.com";
$email[]= "rapariga@yahoo.com";

echo("<pre>");
print_r ($email);
echo("<pre>");
var_dump($email);

$acess= array("Osvaldo", 22, "lauro@gmail.com");

echo("<pre>");
var_dump($acess);




$nome= array("Jõao", "Maria", "Cléber", "Richard", "Debora");

echo ("Os nomes no array <br/>");

foreach ($nome as $nomes) {

	echo("<br/> $nomes");

}
	

$num= array(1,2,3,4,5);

foreach ($num as $valor) {
	// code...
	echo("Valor é $valor <br/>");
}

$num[0]= "um";
$num[1]= "dois";
$num[2]= "três";
$num[3]= "quatro";
$num[4]= "cinco";

foreach ($num as $valor) {
	echo("Valor é $valor <br/>");
	// code...
}


$nome["MA"]= "Maria"; 
$nome["PE"]= "Pedro"; 
$nome["ZE"]= "Zézé"; 

echo("<pre>");
var_dump($nome);



*/

$salarios= array("João" => 2000, "Maria" => 1000, "José" =>500);

echo("Salário de João é " . $salarios['João'] . "<br/>");
echo("Salário de Maria é " . $salarios['Maria'] . "<br/>");
echo("Salário de José é " . $salarios['José'] . "<br/>");

$salarios['João']= "Alto";
$salarios['Maria']= "Médio";
$salarios['José']= "Pequeno";

echo("<br/>");
echo("Salário de João é " . $salarios['João'] . "<br/>");
echo("Salário de Maria é " . $salarios['Maria'] . "<br/>");
echo("Salário de José é " . $salarios['José'] . "<br/>");



 ?>