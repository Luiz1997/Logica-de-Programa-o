<?php
print "Programa para ler dois numeros reais em ordem crescente";

print "\nDigite o primeiro numero: " ;
$n1 = trim(fgets(STDIN));
print "\nDigite o segundo numero: " ;
$n2 = trim(fgets(STDIN));

if ($n1 < $n2) {
	print "\n1°: " . $n1;
	print "\n2°: " . $n2;
}

else {
	print "\n1°: " . $n2;
	print "\n2°: " . $n1;
}