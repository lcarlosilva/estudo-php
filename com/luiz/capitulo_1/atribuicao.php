<?php
$a = 0;
$b = 0;

echo "$a e $b";
echo "<br>";

echo "Valor de a - ".$a += 5;
echo "<br>";
echo "Valor de b - ".$b += 5;

echo "<br>";
//pós-incremento. incrementa $a em um e enteao retorna $a.
echo "Valor de a - ". ++$a;
echo "<br>";
//pré-incrementa. retorna $b e, então, incrementa $b em um
echo "Valor de b - ".$b++;
echo "<br>";
echo "Valor de b - ".$b;