<?php
print "Programa para ler tr�s medidas de um tri�ngulo. O programa deve dizer se as tr�s medidas podem
ou n�o compor um tri�ngulo! ";

print "\nDigite a primeira medida: ";
$m1 = trim(fgets(STDIN));
print "\nDigite a segunda medida: ";
$m2 = trim(fgets(STDIN));
print "\nDigite a terceira medida: ";
$m3 = trim(fgets(STDIN));

if ($m1 + $m2 > $m3 && $m1 + $m3 > $m2 && $m3 + $m2 > $m1) {
	print "\nSim, forma um tri�ngulo!";
}

else {
		print "\nN�o forma um tri�ngulo!";
	}
?>