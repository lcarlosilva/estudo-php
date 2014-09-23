<?php

include 'MyException.php';

/**
 * Cria uma classe para testar a exceção
 */
class TestException {

	public $var;

	const THROW_NONE    = 0;
	const THROW_CUSTOM  = 1;
	const THROW_DEFAULT = 2;


	function __construct($avalue = self::THROW_NONE) {

		switch ($avalue) {
		    case self::THROW_CUSTOM:
		    	// dispara exceção personalizada
		    	throw new MyException('1 é um parâmetro inválido', 5);
		    	break;

		    case self::THROW_DEFAULT:
		    	// dispara a padrão
		    	throw new Exception('2 não é permitido como parâmetro', 6);

		    	break;

		    default:
		    	// Nenhuma exceção, objeto será criado.
		    	$this->var = $avalue;
		    	break;

		}

	}

}

// Exemplo 1
try {
	$o = new TestException(TestException::THROW_CUSTOM);
}
catch (MyException $e) {/* Será pega */
	echo "Pegou minha exceção<br>", $e;
	$e->customFunction();
}
catch (Exception $e) {/* Ignorado */
	echo "Pegou Exceção Padrão<br>", $e;
}
var_dump($o);/* continua execução */
echo "<br>";


// Exemplo 2
try {
	$o = new TestException(TestException::THROW_DEFAULT);
}
catch (MyException $e) {/* Tipos não batem */
	echo "Pegou minha exceção<br>", $e;
	$e->customFunction();
}
catch (Exception $e) {/* Será pega */
	echo "Pegou Exceção Padrão<br>", $e;
}
var_dump($o);/* continua execução */
echo "<br>";


// Exemplo 3
try {
	$o = new TestException(TestException::THROW_CUSTOM);
}
catch (Exception $e) {/* Será pega */
	echo "Default Exception caught<br>", $e;
}
var_dump($o);/* continua execução */
echo "<br>";


// Exemplo 4
try {
	$o = new TestException();
}
catch (Exception $e) {/* Ignorada, nenhuma exceção */
	echo "Default Exception caught<br>", $e;
}
var_dump($o);/* continua execução */
echo "<br>";