$('document').ready(function(){
//=========================================================================
$('#btnToutCocher').on('click', toutCocher);
$('#btnToutDecocher').on('click', toutDecocher);
$('#btnCocherP').on('click', cocherP);
$('#btnRemplacerP').on('click', remplacerP);
 $('#btnAfficherNbFruitsCoches').on('click', afficherNbFruitsCoches);
$('#divFruits input:checkbox').on('click',afficherNbFruitsCoches);

function toutCocher(){
	$('#divFruits input:checkbox').prop('checked', true);
	afficherNbFruitsCoches();
}
function toutDecocher(){
	$('#divFruits input:checkbox').prop('checked', false);
	afficherNbFruitsCoches();
}
function cocherP(){
	toutDecocher();
	//$('#divFruits').find(':checkbox[value^="P"]').prop('checked', true);
	$('#divFruits input:checkbox[value^="P"]').prop('checked', true);
	afficherNbFruitsCoches();
}
function remplacerP(){
	$('#divFruits input:checkbox[value^="P"]').next().html("xxx");
}
function afficherNbFruitsCoches(){
	$('#spanNbFruitsCoches').html(nbreDeFruitsCoches());
}
function nbreDeFruitsCoches(){
	return $('#divFruits input:checked').length;
}
//=========================================================================
}); //$('document').ready(function(){
