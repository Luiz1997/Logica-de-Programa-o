<?php
print "Programa para ler três medidas de um triângulo. O programa deve dizer se as três medidas podem
ou não compor um triângulo! ";

print "\nDigite a primeira medida: ";
$m1 = trim(fgets(STDIN));
print "\nDigite a segunda medida: ";
$m2 = trim(fgets(STDIN));
print "\nDigite a terceira medida: ";
$m3 = trim(fgets(STDIN));

if ($m1 + $m2 > $m3 && $m1 + $m3 > $m2 && $m3 + $m2 > $m1) {
	print "\nSim, forma um triângulo!";
}

else {
		print "\nNão forma um triângulo!";
	}
?>