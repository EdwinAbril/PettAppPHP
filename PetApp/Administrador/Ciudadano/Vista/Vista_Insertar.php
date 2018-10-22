o<?php
require_once("../Controlador/Controlador_Ciudadano.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Ciudadano</title>
</head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
<body>
	<div class="insertar">
	<h1>Insertar Ciudadano</h1>
 <form action="" method="Post">
 	<p><label>Cedula</label></p><input type="number" name="cedula">
    	<p><label>Nombre</label></p><input type="text" name="nombre">
    	<p><label>Telefono</label></p><input type="number" name="telefono">
    	<p><label>Direccion</label></p><input type="text" name="direccion">
    	<p><label>Correo Electronico</label></p><input type="text" name="correo">
    	<input type="submit" name="consulta" value="Insertar Nuevo Ciudadano">
    </form>
</div>
    <?php
if(isset($_POST['consulta']))
{
	$ced=$_POST['cedula'];
	$nom=$_POST['nombre'];
	$tel=$_POST['telefono'];
	$dir=$_POST['direccion'];
	$cor=$_POST['correo'];
	$mensaje=$mostrar->InsertarCiudadano($ced,$nom,$tel,$dir,$cor);
	echo "<script type='text/javascript'>;
	alert('".$mensaje."');
	</script>";
}

    ?>

</body>
</html>