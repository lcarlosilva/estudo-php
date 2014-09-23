<?php

class MyException extends Exception {

	/* Redefine a exce��o para que a mensagem n�o seja opcional */
	public function __construct($message, $code = 0) {

		// coisas personalizadas que voc� queira fazer
		// ...

		/* Garante que tudo � atribu�do corretamente */
		parent::__construct($message, $code);
	}

	/* Representa��o do objeto personalizada no formato string */
	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}<br>";
	}

	public function customFunction() {
		echo "Uma fun��o personalizada para esse tipo de exce��o<br>";
	}

}