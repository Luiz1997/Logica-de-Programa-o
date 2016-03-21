<?php
print "Programa para ler um numero inteiro e dizer se e impar ou par" ;

print "\nDigite o numero: ";
$n1 = trim(fgets(STDIN));

if ($n1 % 2 == 0) {
	print "Par";
}

else {
	print "Impar";
}

?>