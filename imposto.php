<?php 



$vb= 4300;
$por= 14;
$desc= $vb*$por/100; 
$descir=0;
$sl= 0;

echo("Salario Folha: R$$vb <br/>");
echo ("Desconto do INSS: R$$desc <br/>");



if ($vb>0 && $vb<3036) {
	$ir= 0;

} elseif ($vb>3036 && $vb<3533) {
	$ir= 7;

} elseif ($vb>3533 && $vb<4688) {
	$ir= 15;

} elseif ($vb>4688 && $vb<5830) {
	$ir= 22.5;

} elseif ($vb>5830) {
	$ir= 27.5;
}

function imposto($vb, $ir, $descir, $desc ,  $sl){
	$descir= $vb*$ir/100;
	$sl= $vb-$desc-$descir;
	echo("Desconto IR: R$$descir <br/>");
	echo ("Salario Liquido: R$$sl");
}

	imposto($vb, $ir, $descir, $desc , $sl);





 ?>