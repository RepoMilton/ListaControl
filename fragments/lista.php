<!DOCTYPE html>
<html>
<head>
	<title>Lista de Estudiantes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body class="fondo">
	<div id="main-container">

	<h4>Lista de Estudiantes</h4>
<table width="100%" >
	<thead>
	<tr >	
		<th> Numero</th>
		<th> Nombres </th>
		<th> Apellidos </th>
		<th> Fecha de Nacimiento</th>
		<th> Género</th>
		<th> Control</th>
		<th> e-mail</th>
		<th> Dirección</th>
		<th> Teléfono</th>

	</tr>
	</thead>
	<?php
            $servidor = "localhost";
            $nombreusuario = "root";
            $password = "";
            $db = "lista_cotejo";
        
            $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
        
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

			$sql = "SELECT * FROM estudiantes";
            $resultado = $conexion->query($sql);

            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    ?>
                    	<tr>
                    		<td><?php echo $row['codest']?></td>
                    		<td><?php echo $row['nombre']?></td>
                    		<td><?php echo $row['apellido']?></td>
                    		<td><?php echo $row['fechanac']?></td>
                    		<td><?php echo $row['genero']?></td>
                    		<td><?php echo $row['dni']?></td>
                    		<td><?php echo $row['mail']?></td>
                    		<td><?php echo $row['direccion']?></td>
                    		<td><?php echo $row['telefono']?></td>
                    	</tr>
                    <?php
                    
                }
            }

            $conexion->close();

?>
</table>
</div>
<form action="estudiantes.php" method="post">
		<div style="width: 20%;margin-left: 85px">
			<input type="submit" class="btn btn-primary btn-block" value="Regresar">
		</div>
	</form>
</body>
</html>