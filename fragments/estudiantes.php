<!DOCTYPE html>
<html>
<head>
	<title>Estudiantes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body class="fondo">
	<br>
	<div style="width: 90%; margin-left:50px; margin-right:20px;margin-top: 10px ">
	<form action="estudiantes.php" method="post">
	<div ><h4>Estudiante</h4>
			<div class="input-group" style="width: 30%">	
				<div style="margin-top: 10px"><p>Numero de Control:</p> </div>
					<span class="input-group-addon" style="margin-left: 57px"></span>			
					<input type="text" class="form-control" placeholder="Numero de Control" name="cod" required><br>
				
			</div>	
			<div class="input-group">	
				<div style="margin-top: 10px"><p>Nombre Completo:</p> </div>
					<span class="input-group-addon" style="margin-left: 120px"></span>			
					<input type="text" class="form-control" placeholder="Ingrese su nombre completo" name="nomb" required><br>
				<div style="margin-left: 80px;margin-top: 10px"><p>Apellidos:</p></div>
					<span class="input-group-addon" style="margin-left: 20px"></span>
					<input type="text" class="form-control" placeholder="Ingrese sus apellidos" name="apell" required><br>
			</div>
			<div class="input-group">	
				<div style="margin-top: 10px"><p>Fecha de Nacimiento:</p> </div>
					<span class="input-group-addon" style="margin-left: 38px"></span>
					<div style="width: 35%">			
					<input type="text" class="form-control" placeholder="Ingrese su fecha de nacimiento" name="nac" required><br></div>
				<div style="margin-left: 85px;margin-top: 10px"><p>Sexo:</p></div>
					<span class="input-group-addon" style="margin-left: 50px"></span>
					<input type="text" class="form-control" placeholder="Ingrese su sexo" name="sexo" required><br>
			</div>
			<div class="input-group">	
				<div style="margin-top: 10px"><p>Numero de Credencial:</p> </div>
					<span class="input-group-addon" style="margin-left: 10px"></span>					
					<div style="width: 35%">							
					<input type="text" class="form-control" placeholder="NUmero de Credencial" name="dni" required><br>
				</div>
				<div style="margin-left: 85px;margin-top: 10px"><p>e-mail:</p></div>
					<span class="input-group-addon" style="margin-left: 40px"></span>
					<input type="text" class="form-control" placeholder="Ingrese su e-mail" name="mail" required><br>
			</div>
			<div class="input-group">	
				<div style="margin-top: 10px"><p>Dirección:</p> </div>
					<span class="input-group-addon" style="margin-left: 120px"></span>						
					<div style="width: 35%">					
					<input type="text" class="form-control" placeholder="Ingrese su dirección" name="direcc" required><br>
					</div>
				<div style="margin-left: 85px;margin-top: 10px"><p>Teléfono:</p></div>
					<span class="input-group-addon" style="margin-left: 25px"></span>
					<input type="text" class="form-control" placeholder="Ingrese su Teléfono/celular" name="cel" required><br>
			</div>
		
	</div>
	</div>
		<div style="width: 20%;margin-left: 50px">
			<input type="submit" class="btn btn-primary btn-block" value="Registrar Datos">
		</div>
	</form>
	<br>
	<form action="lista.php" method="post">
		<div style="width: 20%;margin-left: 50px">
			<input type="submit" class="btn btn-primary btn-block" value="Lista de Estudiantes">
		</div>
	</form>


	<div>
		<?php
            $servidor = "localhost";
            $nombreusuario = "root";
            $password = "";
            $db = "lista_cotejo";
        
            $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
        
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

            if(isset($_POST['cod'],)){
                $codigo = $_POST['cod'];
                $nombre = $_POST['nomb'];
                $apellido = $_POST['apell'];
                $fechanac= $_POST['nac'];
                $sexo = $_POST['sexo'];
                $dni = $_POST['dni'];
                $mail = $_POST['mail'];
                $direccion = $_POST['direcc'];
                $telefono = $_POST['cel'];
                
                $sql = "INSERT INTO estudiantes(codest,nombre,apellido,fechanac,genero,dni,mail,direccion,telefono)
                                    VALUES($codigo,'$nombre','$apellido','$fechanac','$sexo','$dni','$mail','$direccion','$direccion')";
                
                if($conexion->query($sql) === true){
                    
                }else{
                    die("Error al insertar datos: " . $conexion->error);
                }
                $conexion->close();
            }

        ?>
	</div>
</body>
</html>