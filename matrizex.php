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
*/


$ma= array(
	array(25,12, 35),
	array(85, 47, 98),
	array(32, 38, 105));


$mb= array(
	array(98,65, 35),
	array(5, 27, 8),
	array(74, 14, 3));

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

 ?>