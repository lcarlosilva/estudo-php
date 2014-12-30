<?php
	$objeto2 = new DateTime();

	$objeto1 = $objeto2;
	$objeto3 =& $objeto2;

	$objeto2 = new stdClass();
	$objeto2->nome = 'Nome';

	$objeto2 = new DateTime('2013-04-04');

	var_dump($objeto1);
	var_dump($objeto2);
	var_dump($objeto3);

	die();
?>