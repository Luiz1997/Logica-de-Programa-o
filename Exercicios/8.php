<?php
print "Programa para ler as medidas dos catetos de um triângulo retângulo ! ";
		
print "\nDigite o primeiro cateto: ";
$c1 = trim(fgets(STDIN));
print "\nDigite o segundo cateto: ";
$c2 = trim(fgets(STDIN));

$h = sqrt($c1 * $c1 + $c2 * $c2);
print "\nValor da Hipotenusa: " . $h;

$p = $c1 + $c2 + $h;
print "\nValor da perimetro: " . $p;

$a = ($c1 * $c2) / 2;
print "\nValor da area: " .$a;

?>