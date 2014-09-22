<?php
if ($a = 5) {
    echo 'essa operacao atribui 5 a variavel $a e retorna verdadeiro';
}

echo"<br>|--------------------------|<br>";

$a = 1234;
$b = '1234';

if ($a == $b) {
    echo '$a e $b são iguais.';
}
elseif ($a != $b){
	echo '$a e $b são diferentes';
}

echo"<br>|--------------------------|<br>";

$c = 1234;
$d = '1234';

if ($c === $d) {
    echo '$c e $d são iguais e do mesmo tipo';
} 

if ($c !== $d) {
    echo '$c e $d são de tipos diferentes';
}

echo"<br>|--------------------------|<br>";
//comparaçoes com ZERO(0)

$e = 0;

//zero sempre é igual a FALSE
if ($e == FALSE) {
    echo '$e é falso';
}
echo '<br>';
//testa se $e é do tipo FALSE
if ($e === FALSE) {
    echo '$e é do tipo FALSE';
}

if ($e === 0) {
    echo '$e é zero mesmo.';
}
