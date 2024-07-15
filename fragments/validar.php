<?php
  $host ="localhost";
 $user ="root";
 $pass ="";
 $db="lista_cotejo";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $usuario1=$_POST['txtuser'];
 $contraseña1=$_POST['txtpass'];
 $query="SELECT * FROM login";
 $resultado= $con->query($query);
 $a=0;
 while($row=$resultado->fetch_assoc()){
 	$aux2=$row['user'];
 	$aux=$row['password'];
 	if($contraseña1==$aux&&$aux2==$usuario1){
 		$a++;
 	}

 }
if($a>=1){
 		header("Location:main.php");

 		
 	}else{
 		header("Location:../index.php");
 	}
mysqli_close($con);
 ?>