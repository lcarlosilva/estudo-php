<?php
class Computador{
	
	public $cpu;
	
	function ligar(){
		echo "Ligando computador a {$this->cpu}...";
	}
}

	$obj = new Computador;
	$obj->cpu = "500 Mhz";
	$obj->ligar();
	
	echo'<br>';
	
	print_r(gettype($obj));
	
?>