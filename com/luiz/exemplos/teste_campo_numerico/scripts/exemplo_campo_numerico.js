/* javascript COM JQuery */
$(document).ready(function(){

	$('#btnEnviar').click(function(ev){

		var valor_campo = $('#numerico').val();

		if(!isNaN(valor_campo)){
			alert('O valor é numérico.');
		}else{
			alert('O valor não é numérico.');
			ev.preventDefault();
		}

	});

});

/* javascript PURO */
/*window.onload = function (){
	
	var btn = document.getElementById('btnEnviar');
	btn.onclick = function (ev){
		//alert('chegou aki!');
		document.querySelector('');
	var valor_campo = document.getElementById('numerico').value;

	if(!isNaN(valor_campo)){
			alert('O valor é numérico.');
		}else{
			alert('O valor não é numérico.');
			ev.preventDefault();
		}
	};
	
};*/