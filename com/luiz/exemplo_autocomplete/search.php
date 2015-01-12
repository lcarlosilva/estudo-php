<?php
	
	if (isset($_GET['term'])) {
		header('Content-Type: application/json');
		$i = 0;
		$result = array(
			array('id' => $i++, 'label' => 'Isso', 'value' => 'isso'),
			array('id' => $i++, 'label' => 'Aquilo', 'value' => 'aquilo'),
			array('id' => $i++, 'label' => 'Fulano', 'value' => 'fulano'),
			array('id' => $i++, 'label' => 'Ciclano', 'value' => 'ciclano'),
			array('id' => $i++, 'label' => 'Beltrano', 'value' => 'beltrano'),
			array('id' => $i++, 'label' => 'Teste', 'value' => 'Teste')
		);
		
		echo json_encode(array_filter($result, function ($v) {
			return (stripos($v['value'], $_GET['term']) !== false);
		}));
	}
