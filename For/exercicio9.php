<?php
/* Fazer um programa que leia um n�mero positivo N. Da�, imprimir na tela uma contagem de 1 at� N. */
print "Digite o valor de N: ";
$N = trim(fgets(STDIN));

for ($i=1; $i<=$N; $i++) {
	print "$i ";
}