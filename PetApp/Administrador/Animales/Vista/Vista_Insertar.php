<!DOCTYPE html>
<html>
<head>
	<title>Insertar Animal</title>
</head>
<body>
	<h1>Insertar Animal</h1>
 <form action="../Controlador/Controlador_Animal.php" method="Post">
 	<p><label>Nombre del Animal</label></p><input type="text" name="nombre">
    	<p><label>Tipo de Animal</label></p><input type="text" name="tipo">
    	<p><label>Edad del Animal</label></p><input type="text" name="edad">
    	<p><label>Raza del Animal</label></p><input type="text" name="raza">
    	<input type="submit" name="consulta" value="Insertar Nuevo Animal">
    </form>
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