<?php
require_once("../Controlador/Controlador_Insertar.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Insertar Usuario de la Veterinaria</title>
</head>
  <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
<body id="fondox">
    <form action="../Vista/Vista_Usuario.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
</form>
<center>
  <div id="insertar">
  <h1>Insertar Usuario de Veterinaria</h1>
 <form action="../Controlador/Controlador_Insertar.php" method="Post">
      <p><label>Nit</label></p><input type="text" name="nombre">
      <p><label>Clave</label></p><input type="password" name="clave">
            </br>
    </br>
      <input type="submit" name="consulta" value="Insertar Nuevo Usuario" class="btn btn-primary">
    </form>
</div>
</center>
    <?php
if(isset($_POST['consulta']))
{
echo "<script type='text/javascript'>;
  swal('".$result."');
  </script>";
  
}

    ?>

</body>
</html>