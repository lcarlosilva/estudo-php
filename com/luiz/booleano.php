<?php

	// declara variavel com valor TRUE
	$exibir_nome = TRUE;
	
	// teste se exibir nome é TRUE
	if($exibir_nome){
		print_r(gettype($exibir_nome) ? 'true <br>':'false <br>');
		echo 'José da silva';
	}	
	
	//declara variavel numerica
	$umidade = 91;
	
	$vai_chover = ($umidade > 90);
	
	//testa se $vai_chover é verdadeiro
	if ($vai_chover){
		echo '<br>Está chovendo';
	}

?>