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
	<form action="login.php">
  		<input type="submit" name="inicio" value="inicio" class="btn btn-light" id="">
  	</form> 
	<div id=contenedor>
	<header class="titulo">
		<center>
		<h1>PetApp</h1>
		</center>
	</header>
	
	<div id="Ingreso" src="Imagenes/user">
		<form action="registro.php" method="Post"  id="LogIn">
			<center>
			<h1>Ingresar</h1>
			<input type="text" name="Usuario" value="" placeholder="Usuario" required="">
			<input type="password" name="Clave" value="" placeholder="Clave" required="">
			<br>
			<br>
			<input type="submit" name="Entrar" value="Iniciar Sesion" class="btn btn-primary" >
			</center>
		</form>
		<?php

session_start();
if (isset($_POST['Entrar'])) {
	require_once("Modelo/Modelo_Login.php");
	$us=$_POST['Usuario'];
	$co=$_POST['Clave'];
	$obj= new MetodoLogin();
	$con=$obj->Login($us,$co);
	$num=$con->num_rows;
	if ($num>0){
		while($sql_d=$con->fetch_assoc()){
			if ($sql_d['rol_login']==1) {
				$_SESSION["Usuario"]=$sql_d['nombre_usuario'];
				header("Location:../../Administrador/Menu/Vista/Administrador.php");
			}
			else if ($sql_d['rol_login']==2) {
				$_SESSION["Usuario"]=$sql_d['nombre_usuario'];
				header("Location:../../Funcionario/Menu/Vista/Funcionario.php");
			}
			else if ($sql_d['rol_login']==3) {
				$_SESSION["Usuario"]=$sql_d['nombre_usuario'];
				header("Location:../../Veterinaria/Menu/Vista/Veterinaria.php");
			}
			else if ($sql_d['rol_login']==4) {
				$_SESSION["Usuario"]=$sql_d['nombre_usuario'];
				header("Location:../../Ciudadano/Ciudadano/Menu/Ciudadano.php");
			}
		}
	}
	else{
		echo "<h3 color='white' ><Center>Usted No Es Un Usuario Registrado</Center></h3>";
	}	
}
?>
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