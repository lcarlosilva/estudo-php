<?php
	$master = array('posicao um','posicao dois');

	echo "array com duas posicoes";
	var_dump($master);

	echo "inseriu posicao nova no array";
	$master[] = 'posicao tres';

	echo "array com tres posicoes";
	var_dump($master);
?>