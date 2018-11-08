<?php
require_once("../Controlador/Controlador_Insertar.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Insertar Usuario del Funcionario</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>
  <form action="../../Menu/Vista/Administrador.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
<center>
  <div id="insertar">
  <h1>Insertar Usuario del Funcionario</h1>
 <form action="../Controlador/Controlador_Insertar.php" method="Post">
  <p><label>Cedula </label></p><input type="number" name="cedula">
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
  swal('".$result."', '', 'success');
  </script>";
  
}

    ?>

</body>
</html>