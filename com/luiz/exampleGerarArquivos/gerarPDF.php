<?php

@ob_start();
?>

<table style="font-size: 9pt;">
	<th>Teste</th>
	<th>TESTE</th>
     <tr>
     	<td>html do pdf</td>
     	<td>teste</td>
     <tr>
     <tr>
     	<td>teste</td>
     </tr>	
     <br/>
</table>

<?php
$html = ob_get_contents();
ob_end_clean();
    	 die( $html );
$content = http_build_query( array('conteudoHtml'=> utf8_encode($html) ) );
$context = stream_context_create( array( 'http'=>array( 'method'=>'POST', 'content'=> $content )));
$contents = file_get_contents('http://ws.mec.gov.br/ws-server/htmlParaPdf', null, $context );
$nome_arquivo = "arquivo.pdf";
//header('Content-Type: application/pdf');
//header("Content-Disposition: attachment; filename=". $nome_arquivo);
die( $contents );
?>
