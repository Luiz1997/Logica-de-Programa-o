<?php
do {
	print "Digite a temperatura em Celsius: ";
	$C = trim(fgets(STDIN));
	$F = 9*$C/5 + 32;
	print "Equivalente em Fahrenheit = $F\n\n";
	
	print "Deseja continuar (S/N)? ";
	$op = trim(fgets(STDIN));
} while ($op == 'S' || $op == 's');