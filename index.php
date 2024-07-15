<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="images/colegio.png" />
        <link rel="stylesheet" href="css/index.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Pagina Docente-Estudiante</title>
    </head>
    <body background="">
        <div class="container mt-4 col-lg-6">
            <div class="card col-sm-10">
                <div class="card-body">
                    <form class="form-sign" action="fragments/validar.php" method="POST">
                        <div class="form-group text-center">
                            <h3>Log In</h3>
                            <img src="images/iniciar-sesion.png" width="170"/><br>
                            <!--<label>Bienvenidos al Sistema</label>-->
                        </div>
                        <div class="form-group">
                           <!-- <label>Usuario:</label>-->
                            <input type="text" id="usuario" name="txtuser" class="form-control" placeholder="Usuario"
                            >
                        </div>
                        <div class="form-group">
                            <!--<label>Password:</label>-->
                            <input type="password" id="password" name="txtpass" class="form-control" placeholder="Contraseña">
                        </div>
                        <input type="submit" id="enviar" name="accion" value="Ingresar" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>           
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="scripts/index.js"></script>
    </body>

    
</html>