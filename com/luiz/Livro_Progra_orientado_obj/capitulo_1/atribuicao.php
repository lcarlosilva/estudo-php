<?php
$a = 0;
$b = 0;

echo "$a e $b";
echo "<br>";

echo "Valor de a - ".$a += 5;
echo "<br>";
echo "Valor de b - ".$b += 5;

echo "<br>";
//p�s-incremento. incrementa $a em um e enteao retorna $a.
echo "Valor de a - ". ++$a;
echo "<br>";
//pr�-incrementa. retorna $b e, ent�o, incrementa $b em um
echo "Valor de b - ".$b++;
echo "<br>";
echo "Valor de b - ".$b;