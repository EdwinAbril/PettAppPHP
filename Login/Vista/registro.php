<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device−width, initial−scale=1.0" />
	<title>PetApp</title>
	<link rel="stylesheet" href="Estilos.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
	<div id=contenedor>
	<header class="titulo">
		<center>
		<h1>PetApp</h1>
		</center>
	</header>
	<div id="Ingreso" src="Imagenes/user">
		<form action="" method="Post"  id="LogIn">
			<center>
			<h1>Ingresar</h1>
			<input type="text" name="Usuario" value="" placeholder="Usuario" required="">
			<input type="password" name="Clave" value="" placeholder="Clave" required="">
			<br>
			<br>
			<input type="submit" name="Entrar" value="Iniciar Sesion" class="btn btn-primary" >
			</center>
		</form>
	</div>
	<div>
		
	</div>
		<div><br>
			<center>
			<a href="Registrarse.php" target="cargar" name="" class="btn btn-outline-success">Registrarse </a>
			<br><br>
			</div>
				<center>
				<iframe name="cargar" id="Registrar">
				</iframe>
				</center>
		<footer >
			Todos los derechos reservados
		</footer>
		</center>
	</div>
	
</body>
</html>