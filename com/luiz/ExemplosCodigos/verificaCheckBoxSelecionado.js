var aux = [];

//('[name="cargo[]"]') -> REPRESENTA CHECKBOX

$('[name="cargo[]"]').each(
	function(index, el){
	   if($(el).is(':checked')) {
	        aux.push($(el).val());
   		}
	}
);