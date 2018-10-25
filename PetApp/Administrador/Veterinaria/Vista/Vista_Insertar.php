<?php
require_once("../Controlador/Controlador_Veterinaria.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Veterinaria</title>
	       <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
		    <form action="Vista_Veterinaria.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
	<div class="insertar">
	<h1>Insertar Veterinaria</h1>
 <form action="../Controlador/Controlador_Veterinaria.php" method="Post">
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
echo "<script type='text/javascript'>;
	alert('".$result."');
	</script>";
	
}

    ?>

</body>
</html>