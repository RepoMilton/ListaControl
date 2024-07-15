$(document).ready(function(){
	var number=0;
	var acum="";
$('#enviarpregunta').click(function(e){
	

	if($('textarea').val()!=''){

	number++;

	$('#preguntasacum').append(`<div id="${number}" class="preguntasdocent"><strong>Pregunta ${number}
	: </strong><nav id="preguntas">${$('textarea').val()}&nbsp;<a id="${number}" class="eliminars"
	><i id="${number}" class="far fa-trash-alt" role="button" data-toggle="popover" data-trigger="hover" data-content="Eliminar"></i></a></nav></div>`);

	$('.fa-trash-alt').mouseenter(function(){
		$(this).popover('show');
	});
	acum+="Pregunta "+number+" : "+$('textarea').val()+"  ";
	$('textarea').val('');
	$('textarea').focus();
	
	$('#enviopregunt').val(acum);
	$('#numpregunt').val($('.preguntasdocent').length);
	}
	var elementsa=document.querySelectorAll('.eliminars');
	var elementsdiv=document.querySelectorAll('.preguntasdocent');
for (var i = 0; i < elementsa.length; i++) {
	elementsa[i].addEventListener('click',function(){
		for (var j = 0; j < elementsa.length; j++) {
		console.log(this.id);
		if(this.id==elementsa[j].id){
			$(`#${elementsdiv[j].id}`).remove();
			$('.popover').remove();
			//elementsdiv[j].style.display="none";
		}
		}
});
}
});
var permitirenvio=false;

$('form').submit(function(e){
	if(!permitirenvio){
		e.preventDefault();	
	}
	
});


$('#exportarpreguntas').click(function(){
permitirenvio=true;
});


/*$('.eliminars').click(function(){
	if(this.id==$('.eliminars').attr('id')){
		$('.eliminars').remove();
	}
});*/
});