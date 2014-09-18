<?php
	
	$nome = "João";
	$sobrenome = "da Silva";
	
	echo"Deu certo -> $sobrenome, $nome";
	echo '<br>';
	print_r(gettype($sobrenome));
	
	//-- variaveis variante --
	
	// difine o nome da variavel
	$variavel = 'nome';
	
	// cria variavel identificada pelo conteúdo de $variavel
	$$variavel = 'maria';

	// exibe variavel $nome na tela
	echo '<br>';
	echo $nome; //resultado = maria
	
	echo '<br>';
	//-- Mudanças de valores --
	
	$a = 5;
	$b = $a;
	$b = 10;
	
	echo $a;
	echo '<br>';
	echo $b;
	
	echo '<br>';
	//-- variaveis gemeas --
	
	print_r(gettype($a));
	echo '<br>';
	$a = 5;
	$b = &$a;
	$b = 11;
	
	echo $a;
	echo '<br>';
	echo $b;
	
?>