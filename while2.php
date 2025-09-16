<?php 

$num1= 2;
$num2=8;
$cont=0;


while ($cont>5 || $num1!=0 || $num2!=0) {
	
	$cont++;
	if ($num1>$num2) {
	 echo ("O maior número é o $num1<br/>");

} elseif($num2>$num1){
	echo ("O maior número é o $num2<br/>");

} else{
	echo ("A entrada é 0");
}

}


 ?> 