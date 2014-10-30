<?php
$animal = 'cachorro';
$array = array('animal' => 'gata'
				,'moradia' => 'casa'
				);
echo $array['animal'];
extract($array, EXTR_PREFIX_ALL, 'test');
echo $array['animal'];
echo $test_animal;
echo $test_moradia;
