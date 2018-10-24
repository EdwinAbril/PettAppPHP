<?php
require_once("../Controlador/Controlador_Veterinaria.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Veterinaria</title>
</head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
<body>
	<div class="insertar">
	<h1>Insertar Veterinaria</h1>
 <form action="" method="Post">
 	<p><label>Nit </label></p><input type="text" name="nit">
    	<p><label>Telefono</label></p><input type="number" name="telefono">
    	<p><label>Nombre</label></p><input type="text" name="nombre">
    	<p><label>Direccion</label></p><input type="text" name="direccion">
    	<p><label>Clave</label></p><input type="password" name="clave">
    	<input type="submit" name="consulta" value="Insertar Nueva Veterinaria">
    </form>
</div>
    <?php
if(isset($_POST['consulta']))
{
	$nit=$_POST['nit'];
	$tel=$_POST['telefono'];
	$nom=$_POST['nombre'];
	$dir=$_POST['direccion'];
	$cla=$_POST['clave'];
	$mensaje=$mostrar->Insertarveterinaria($nit,$tel,$nom,$dir,$cla);
	echo "<script type='text/javascript'>;
	alert('".$mensaje."');
	</script>";
}

    ?>

</body>
</html>