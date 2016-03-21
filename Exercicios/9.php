<?php
print "Programa para ler um número e mostrar na tela uma mensagem dizendo se ele é positivo, negativo
ou nulo! ";

print "\nDigite o numero: ";
$x = trim(fgets(STDIN));

if ($x < 0) {
	print "Negativo";
}

else {
	if ($x > 0) {
		print "Positivo";
	}
	else {
		print "Nulo";
	}
}