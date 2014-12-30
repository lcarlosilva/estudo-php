window.onload = function(){
	document.comboBoxForm.btnVerValor.onclick = lerComboBox;
	document.comboBoxForm.comboBoxMenu.onchange = lerComboBox;
};

function lerComboBox(){
	selectedValue = document.comboBoxForm.comboBoxMenu.value; 
	document.getElementById("comboSpan").innerHTML = selectedValue;
	window.alert(selectedValue);
}