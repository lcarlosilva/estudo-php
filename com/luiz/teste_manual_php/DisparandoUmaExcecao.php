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
	echo "Exce��o pega: ",  $e->getMessage(), "<br>";
}

// continua a execu��o
echo 'Hello World';
?>