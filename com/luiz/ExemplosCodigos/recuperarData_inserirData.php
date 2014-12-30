<?php
	if( ! function_exists('_formatarDataInserir')){
	 function _formatarDataInserir($data){
	  $novaData = explode('/',$data);
	  return $novaData[2] . '-' . $novaData[1] . '-'. $novaData[0];
	 }
	}

	if( ! function_exists('_formatarDataRecuperar')){
	 function _formatarDataRecuperar($data){
	  $novaData = explode('-',$data);
	  return $novaData[2] . '/' . $novaData[1] . '/'. $novaData[0];
	 }
	}
?>