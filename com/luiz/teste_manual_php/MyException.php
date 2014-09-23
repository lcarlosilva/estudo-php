<?php

class MyException extends Exception {

	/* Redefine a exceção para que a mensagem não seja opcional */
	public function __construct($message, $code = 0) {

		// coisas personalizadas que você queira fazer
		// ...

		/* Garante que tudo é atribuído corretamente */
		parent::__construct($message, $code);
	}

	/* Representação do objeto personalizada no formato string */
	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}<br>";
	}

	public function customFunction() {
		echo "Uma função personalizada para esse tipo de exceção<br>";
	}

}