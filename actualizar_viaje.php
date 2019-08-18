<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Actualizar Viaje</title>
  </head>
  
  <body>
        <!-- Para regresar desde cualquier ventana-->
                <nav class="navbar navbar-dark bg-dark">
                        <div class="container">
                                <a href="index.html" class="navbar-brand">Menu Principal</a>
                        </div>
                </nav>

<?php

$conexion=mysqli_connect("localhost","root","","etech") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select * from viajes
                        where cod_v='$_REQUEST[codv]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
?>

<form action="actualizar_viaje_2.php" method="post">
<div class="container">
                    <h1>Informacion de viaje a Actualizar</h1>
                    <!-- <form action="viajes.php" method="post"> -->
                </div>
        
                <div class="container">
                    <h2>Codigo:</h2>
                    <input type="text" name="codv" value="<?php echo $reg['cod_v'] ?>"><br>
                </div>
                
                <div class="container">
                    <h2>Plazas:</h2>
                    <input type="text" name="plazas" value="<?php echo $reg['n_plazas'] ?>"><br>
                </div>
        
                <div class="container">
                    <h2>Origen:</h2>
                    <input type="text" name="ori" value="<?php echo $reg['origen'] ?>"><br>
                </div>
        
                <div class="container">
                    <h2>Destino:</h2>
                    <input type="text" name="des" value="<?php echo $reg['destino'] ?>"><br>
                </div>

                <div class="container">
                    <h2>Precio:</h2>
                    <input type="text" name="pre" value="<?php echo $reg['precio'] ?>"><br>
                </div>

        <br>
                <div class="container">
                    <input type="submit" class="btn btn-success" value="Actualizar">
                    
                    </div>

</form>

<?php
}
else
  echo "No existe viaje con ese codigo";
?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>