<?php
print "Digite um numero inteiro: ";
$x = trim (fgets(STDIN));

while ($x != 0) {
	print "\nDigite novamente: ";
	$x = trim(fgets(STDIN));
}