<?php
if ($a = 5) {
    echo 'essa operacao atribui 5 a variavel $a e retorna verdadeiro';
}

echo"<br>|--------------------------|<br>";

$a = 1234;
$b = '1234';

if ($a == $b) {
    echo '$a e $b s�o iguais.';
}
elseif ($a != $b){
	echo '$a e $b s�o diferentes';
}

echo"<br>|--------------------------|<br>";

$c = 1234;
$d = '1234';

if ($c === $d) {
    echo '$c e $d s�o iguais e do mesmo tipo';
} 

if ($c !== $d) {
    echo '$c e $d s�o de tipos diferentes';
}

echo"<br>|--------------------------|<br>";
//compara�oes com ZERO(0)

$e = 0;

//zero sempre � igual a FALSE
if ($e == FALSE) {
    echo '$e � falso';
}
echo '<br>';
//testa se $e � do tipo FALSE
if ($e === FALSE) {
    echo '$e � do tipo FALSE';
}

if ($e === 0) {
    echo '$e � zero mesmo.';
}
