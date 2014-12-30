<?php
	$instance = new stdClass();
	
	$assigned = $instances;
	$reference = & $instance;
	
	$instance->var = '$assigned terá esse valor';
	
	$instance = null; // $instance e $reference se tornam nulos
	
	var_dump ($instance);
	var_dump ($reference);
	var_dump ($assigned);
?>

<?php
	$assigned = $instance;
	$reference =& $instance;
	
	$instance->var = '$assigned terá esse valor';
	
	$instance = null; // $instance e $reference tornam-se nulos
	
	var_dump($instance);
	var_dump($reference);
	var_dump($assigned);
?>