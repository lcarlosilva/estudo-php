<?php
class MinhaClasse
{
    const constante = 'valor constante<br>';

    function mostrarConstante() {
        echo 'CHAMANDO DENTRO DE mostrarConstante - '. self::constante;
    }
}

echo 'CHAMANDO NO echo - '.MinhaClasse::constante;

$classname = "MinhaClasse";
echo 'CHAMANDO A PARTIR DA VARIAVEL $classname - '. $classname::constante; // A partir do PHP 5.3.0

$classe = new MinhaClasse();
$classe->mostrarConstante();

echo $classe::constante; // A partir do PHP 5.3.0
?>