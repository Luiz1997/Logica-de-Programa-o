<?php
print "Digite um numero: ";
$x = trim(fgets(STDIN));

while ($x != 0) {
	print "Digita outro: ";
	$x = trim(fgets(STDIN));
}

if ($x > $x) {
	print "Maior valor: ". $x;
}