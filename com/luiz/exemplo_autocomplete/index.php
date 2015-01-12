<!DOCTYPE html>
<html>
	<head>
		<title>INDEX</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" ></script>
		<script>

			$(function (){
				$( "#material" ).autocomplete({
					source: "search.php",
					minLength: 1
				}).on('autocompletechange autocompleteselect', function (ev, ui){
					var material = ui.item ? JSON.stringify(ui.item) : '{}';
					$('#materialId').val(material);
				});
				$('#addMaterialPopup').click(function (){
					window.open('popup.php', 'teste', 'fullscreen=0,height=500,width=500,toolbar=0,location=0');
				});
			});

			function editarMaterial () {
				var id = $(this).parent().find('input[name="material[]"]').prop('id');
				id = id.split('_');
				window.open('popup.php?id=' + id[1], 'teste', 'fullscreen=0,height=500,width=500,toolbar=0,location=0');
			}

			function removerMaterial () {
				$(this).parent().parent().remove();
				if (!$('input[name="material[]"]').length) {
					$('#listaMateriais').hide();
				}
			}

			function addMaterial (material) {
				var linha = $('<tr>').append(
					$('<td>').append(
						$('<a>').addClass('glyphicon glyphicon-pencil').click(editarMaterial)
					).append(
						$('<a>').addClass('glyphicon glyphicon-minus').click(removerMaterial)
					).append(
						$('<input>').prop({type: 'hidden', name: 'material[]', id: 'material_' + material.id}).val(JSON.stringify(material))
					)
				).append($('<td>').text(material.label)
				).append($('<td>').text(material.quantidade));
				
				if ($('#material_' + material.id).length) {
					$('#material_' + material.id).parent().parent().replaceWith(linha);
				} else {
					$('#listaMateriais table tbody').append(linha);
				}
				$('#listaMateriais').show();
			}
			function getMaterial (id) {
				var attr = id ? $('#material_' + id).val() : $('#materialId').val();
				var material = JSON.parse(attr);
				if (id) {
					material.label = $('#material_' + id).parent().parent().find('td:eq(1)').html();
					material.quantidade = $('#material_' + id).parent().parent().find('td:eq(2)').html();
				}
				return material;
			}
		</script>
	</head>
	<body>
		<div class="container" style="margin-top: 50px;" >
			<div class="input-group">
				<input type="text" id="material" class="form-control" placeholder="Nome do material">
				<input type="hidden" id="materialId" />
				<a id="addMaterialPopup" class="input-group-addon">
					<i class="glyphicon glyphicon-plus" ></i>
				</a>
			</div>
			<div style="margin-top: 100px; display: none;" id="listaMateriais">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Ações</th>
							<th>Material</th>
							<th>Quantidade</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
