<?php
/* Fazer um programa que leia um número positivo N. Daí, imprimir na tela uma contagem de 1 até N. */
print "Digite o valor de N: ";
$N = trim(fgets(STDIN));

for ($i=1; $i<=$N; $i++) {
	print "$i ";
}