<?php
print "\nDigite a medida L1: " ;
$l1 = trim(fgets(STDIN));
print "\nDigite a medida L2: " ;
$l2 = trim(fgets(STDIN));
print "\nDigite a medida L3: " ;
$l3 = trim(fgets(STDIN));

$t = ($l1 + $l2 + $l3) / 2 ;
$area = sqrt($t * ($t - $l1) * ($t - $l2) * ($t - $l3) ) ;

if ($l1 + $l2 > $l3 && $l1 + $l3 > $l2 && $l3 + $l2 > $l1) {
	print "\nSim, forma um triângulo!" ;
	print "\nArea do triângulo: " . $area ;
}

else {
	print "\nNão forma um triângulo!" ;
}
