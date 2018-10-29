<?php
require_once("Controlador/Controlador_Insertar.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PetApp</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>

<body background="Imagenes/regi.jpeg">


	<div id="contenedor">
	<div id="Registrar">

		<form action="Controlador/Controlador_Insertar.php" method="Post">
			<center>
			<h1>Registrarse</h1>
			<input type="text" name="Usuario" value="" placeholder="Usuario"></label>
			<br>
			<br>
			<input type="password" name="clave" value="" placeholder="Clave" ></label>
			<br>
			<br>
			<input type="submit" name="Entrar" value="Registrarse" class="btn btn-primary">
			</center>
		</form>
			
	</div>

</div>
	


</body>
</html>
