<?php
            $servidor = "localhost";
            $nombreusuario = "root";
            $password = "";
            $db = "lista_cotejo";
        
            $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
        
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

               setlocale(LC_TIME,"es_ES");
               $descrip=$_POST['enviopregunt'];
               $numpregunt=$_POST['numpregunt'];
               $fecha=strftime("%Y %B %A %H:%M");;
               $horainic=strftime("%H:%M");
               $horafin="6:05 PM";
               $puntaje=0;
                
                $sql = "INSERT INTO lista_cotejo(descrip,numpregunt,fecha,horainic,horafin,puntaje)
                                    VALUES('$descrip',$numpregunt,'$fecha','$horainic','$horafin',$puntaje)";
                
                if($conexion->query($sql) === true){
                    
                }else{
                    die("Error al insertar datos: " . $conexion->error);
                }
                $conexion->close();
            

        ?>