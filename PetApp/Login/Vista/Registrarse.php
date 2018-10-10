
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PetApp</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>

<body background="Imagen/regi.jpeg">


	<div id="contenedor">
	<div id="Registrar">
		<form action="../Controlador/RegistroC.php" method="Post">
			<center>
			<h1>Registrarse</h1>
			<input type="number" name="CedulaCiu" value="" placeholder="Cedula"></label>
			<br>
			<br>
			<input type="text" name="Usuario" value="" placeholder="Nombre de Usuario"></label>
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
