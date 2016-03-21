<?php
print "Digite o valor do primeiro numero: ";
$n1 = trim(fgets(STDIN));
print "Digite o valor do segundo numero: ";
$n2 = trim(fgets(STDIN));
print "Digite o valor do terceiro numero: ";
$n3 = trim(fgets(STDIN));
print "Digite o valor do quarto numero: ";
$n4 = trim(fgets(STDIN));

$media = ($n1 + $n2 + $n3 + $n4)/4;

print "Valor da media aritmetica: " . $media;

if ($media >= 6) {
	print "\nAprovado";
}

else {
	print "\nReprovado";
}
?>