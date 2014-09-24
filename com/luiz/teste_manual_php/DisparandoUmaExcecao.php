<?php
function inverse($x) {
	if (!$x) {
		throw new Exception('Division by zero.');
	}
	else return 1/$x;
}

try {
	echo inverse(5) . "<br>";
	echo inverse(0) . "<br>";
} catch (Exception $e) {
	echo "Exceção pega: ",  $e->getMessage(), "<br>";
}

// continua a execução
echo 'Hello World';
?>