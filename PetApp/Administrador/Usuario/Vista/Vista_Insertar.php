<?php
require_once("../Controlador/Controlador_Usuario.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Usuario del Ciudadano</title>
</head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>
  <form action="Vista_Usuario.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
	<div class="insertar">
	<h1>Insertar Usuario</h1>
 <form action="../Controlador/Controlador_Usuario.php" method="Post">
    	<p><label>Nombre</label></p><input type="text" name="nombre">
    	<p><label>Clave</label></p><input type="password" name="clave">
    	<input type="submit" name="consulta" value="Insertar Nuevo Usuario">
    </form>
</div>
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