<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/assignments.css">
</head>
<body>

	<center><h1>REGISTRO DE ACTIVIDADES</h1></center>
<form id="tareas_docente" action="guardar_preguntas.php" method="POST">
	<div class="form-group">
    <label id="txtpregunta" for="exampleFormControlTextarea1">Ingrese pregunta</label>
    <textarea class="form-control" id="txtpreguntacomp" rows="3"></textarea>
    <input type="hidden" id="enviopregunt" name="enviopregunt" value="">
    <input type="hidden" id="numpregunt" name="numpregunt" value="">
  </div> <button id="enviarpregunta" class="btn btn-primary">Agregar</button>
  			<button type="submit" id="exportarpreguntas" class="btn btn-dark">Enviar</button>
</form>
<div id="preguntasacum">
	

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="../scripts/assignments.js"></script>
</body>
</html>