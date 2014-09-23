<?php

include 'MyException.php';

/**
 * Cria uma classe para testar a exce��o
 */
class TestException {

	public $var;

	const THROW_NONE    = 0;
	const THROW_CUSTOM  = 1;
	const THROW_DEFAULT = 2;


	function __construct($avalue = self::THROW_NONE) {

		switch ($avalue) {
		    case self::THROW_CUSTOM:
		    	// dispara exce��o personalizada
		    	throw new MyException('1 � um par�metro inv�lido', 5);
		    	break;

		    case self::THROW_DEFAULT:
		    	// dispara a padr�o
		    	throw new Exception('2 n�o � permitido como par�metro', 6);

		    	break;

		    default:
		    	// Nenhuma exce��o, objeto ser� criado.
		    	$this->var = $avalue;
		    	break;

		}

	}

}

// Exemplo 1
try {
	$o = new TestException(TestException::THROW_CUSTOM);
}
catch (MyException $e) {/* Ser� pega */
	echo "Pegou minha exce��o<br>", $e;
	$e->customFunction();
}
catch (Exception $e) {/* Ignorado */
	echo "Pegou Exce��o Padr�o<br>", $e;
}
var_dump($o);/* continua execu��o */
echo "<br>";


// Exemplo 2
try {
	$o = new TestException(TestException::THROW_DEFAULT);
}
catch (MyException $e) {/* Tipos n�o batem */
	echo "Pegou minha exce��o<br>", $e;
	$e->customFunction();
}
catch (Exception $e) {/* Ser� pega */
	echo "Pegou Exce��o Padr�o<br>", $e;
}
var_dump($o);/* continua execu��o */
echo "<br>";


// Exemplo 3
try {
	$o = new TestException(TestException::THROW_CUSTOM);
}
catch (Exception $e) {/* Ser� pega */
	echo "Default Exception caught<br>", $e;
}
var_dump($o);/* continua execu��o */
echo "<br>";


// Exemplo 4
try {
	$o = new TestException();
}
catch (Exception $e) {/* Ignorada, nenhuma exce��o */
	echo "Default Exception caught<br>", $e;
}
var_dump($o);/* continua execu��o */
echo "<br>";