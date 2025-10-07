<?php 


$num=array(1,-4,234,345,30,12,-89,90,-11,0);

$imp=0;
$par=0;
$nega=0;
$posi=0;

foreach ($num as $valor) {
	if ($valor < 0) {
		$nega++;

	}else{
		$posi++;
	}

	if ($valor % 2 ==0) {
		$par++

	}else{
		$imp++;
	}
}

echo "São $nega números negativos <br/> São "
 ?>