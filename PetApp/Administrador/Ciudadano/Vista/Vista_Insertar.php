<?php
require_once("../Controlador/Controlador_Ciudadano.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Ciudadano</title>
	       <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
	
<body>
	    <form action="Vista_Ciudadano.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
	<div class="insertar">
	<h1>Insertar Ciudadano</h1>
 <form action="" method="Post">
 	<p><label>Cedula</label></p><input type="number" name="cedula">
    	<p><label>Nombre</label></p><input type="text" name="nombre">
    	<p><label>Telefono</label></p><input type="number" name="telefono">
    	<p><label>Direccion</label></p><input type="text" name="direccion">
    	<p><label>Correo Electronico</label></p><input type="text" name="correo">
    	<p><label>Nombre de Usuario</label></p><input type="text" name="usuario">
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
	$us=$_POST['usuario'];
	$mensaje=$mostrar->InsertarCiudadano($ced,$nom,$tel,$dir,$cor,$us);
	echo "<script type='text/javascript'>;
	alert('".$mensaje."');
	</script>";
}

    ?>

</body>
</html>