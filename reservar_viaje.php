<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Reversa</title>
</head>
        <body>
        <!-- Para regresar desde cualquier ventana-->
        <nav class="navbar navbar-dark bg-dark">
          <div class="container">
              <a href="index.html" class="navbar-brand">Menu Principal</a>
          </div>
        </nav>
<?php
//conexion a bs y query de insert 
$conexion=mysqli_connect("localhost","root","","etech") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into reservas(cedula,cod_v) values 
                       ('$_REQUEST[ced]','$_REQUEST[codi]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "Se reservo el viaje.";
?>
</body>
</html>