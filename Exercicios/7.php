<?php
print "Digite um valor numerico X: ";
$x = trim(fgets(STDIN));
print "Digite o limite inferior 'a' do intervalo [a,b] ";
$a = trim(fgets(STDIN));
print "Digite o limite inferior 'b' do intervalo [a,b] ";
$b = trim(fgets(STDIN));

if ($x >= $a && $x <= $b) {
	print "$x pertence ao intervalo [$a,$b]";
}
else {
	print "$x Não pertence ao intervalo [$a,$b]";
}