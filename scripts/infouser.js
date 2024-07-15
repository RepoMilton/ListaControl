$(document).ready(function(){
  localStorage.profile=$(window).height();

  $('#editarinfo').click(function(e){
    e.preventDefault();
    localStorage.nombre=$('#txtnombre').html();
    localStorage.apellido=$('#txtapellido').html();
    localStorage.correo=$('#txtcorreo').html();
    localStorage.direccion=$('#txtdireccion').html();
    localStorage.especialidad=$('#txtespecialidad').html();
    window.location="./editinfo.php";
    
  });
});