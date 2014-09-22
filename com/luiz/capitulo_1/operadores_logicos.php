<?php

$vai_chover = TRUE;
$esta_frio = TRUE;

if ($vai_chover and $esta_frio){
	echo 'Não vou sair de casa.';  	
}

echo '<br>';
$vai_chover = FALSE;
$esta_frio = TRUE;

echo ($vai_chover xor $esta_frio);
echo '<br>';

if ($vai_chover xor $esta_frio){
	echo 'Vou pensar duas vezes antes de sair.';  	
}
