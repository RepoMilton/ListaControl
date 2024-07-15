$(document).ready(function(){
  localStorage.profile=$(window).height();

  $('#nombretxt').val(localStorage.nombre);
  $('#apellidotxt').val(localStorage.apellido);
  $('#correotxt').val(localStorage.correo);
  $('#direcciontxt').val(localStorage.direccion);
  $('#especialidadtxt').val(localStorage.especialidad);
  $('#cancelarinfo').click(function(){
  	window.location="./profile.php";
  });
  var permitirenvio=false;
$('form').submit(function(e){
	if(!permitirenvio){
		e.preventDefault();	
	}
	
});
});