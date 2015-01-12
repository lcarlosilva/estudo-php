<!DOCTYPE html>
<html>
	<head>
		<title>POPUP</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" ></script>
		<script>
			$(function (){
				var material = window.opener.getMaterial($('#idEdicao').val());
				$('#tituloMaterial').text(material.label);
				if (material.quantidade) {
					$('#quantidade').val(material.quantidade);
				}
				if (material.justificativa) {
					$('#justificativa').val(material.justificativa);
				}
				$('#boxQuantidade').show();
				$('#btnEnviar').click(function (){
					$('#boxQuantidade').hide();
					$('#boxJustificativa').show();
				});
				$('#btnEnviar2').click(setMaterial);
				
				function setMaterial () {
					material.justificativa = $('#justificativa').val();
					material.quantidade = $('#quantidade').val();
					window.opener.addMaterial(material);
					window.close();
				}
			});
		</script>
	</head>
	<body>
		<input type="hidden" id="idEdicao" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>" />
		<div id="boxQuantidade" class="container" style="display: none;">
			<h1 id="tituloMaterial"></h1>
			<div style="width: 300px; height: 300px; background-color: #9F9;">IMAGEM</div><br />
			<div class="input-group" style="width: 200px !important;">
				<input type="text" id="quantidade" class="form-control">
				<span class="input-group-btn">
					<button class="btn btn-default" id="btnEnviar" type="button">Enviar</button>
				</span>
			</div>
		</div>
		<div id="boxJustificativa" class="container" style="display: none;">
			<h1>Preencha a justificativa</h1> <br />
			<textarea class="form-control" id="justificativa" rows="3"></textarea>
			<button class="btn btn-default" id="btnEnviar2" type="button">Enviar</button>
		</div>
	</body>
</html>
