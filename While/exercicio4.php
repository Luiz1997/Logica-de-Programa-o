<?php
print "Digite um numero: ";
$x = trim(fgets(STDIN));

$soma = 0;

while ($x != 0) {
	$soma = $soma + $x;
	print "Digita outro: ";
	$x = trim(fgets(STDIN));
}

print "Soma: ".$soma;