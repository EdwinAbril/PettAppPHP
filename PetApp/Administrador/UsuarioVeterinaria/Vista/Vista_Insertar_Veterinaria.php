<?php
require_once("../Controlador/Controlador_Veterinaria.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Insertar Usuario de la Veterinaria</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
<body>
  <div class="insertar">
  <h1>Insertar Usuario</h1>
 <form action="../Controlador/Controlador_Veterinaria.php" method="Post">
      <p><label>Nombre</label></p><input type="text" name="nombre">
      <p><label>Clave</label></p><input type="password" name="clave">
      <input type="submit" name="consulta" value="Insertar Nuevo Usuario">
    </form>
</div>
    <?php
if(isset($_POST['consulta']))
{
echo "<script type='text/javascript'>;
  alert('".$result."');
  </script>";
  
}

    ?>

</body>
</html>