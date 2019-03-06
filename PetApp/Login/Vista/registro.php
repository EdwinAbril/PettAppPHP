<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device−width, initial−scale=1.0" />
	<title>PetApp</title>
	<link rel="stylesheet" href="Estilos.css">
	<link href="../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
	<link href="../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
	<link href="../../Bst/4.3.1/CSS/style.css" rel="stylesheet">
	<script src="../../Bst/4.3.1/js/jquery.min.js"></script>
	<script src="../../Bst/4.3.1/js/bootstrap.min.js"></script>
	<script src="../../Bst/4.3.1/js/scripts.js"></script>
</head>
<body id='fondo'>
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
				header("Location:../../Veterinaria/Login/Vista/login.php");
			}
			else if ($sql_d['rol_login']==4) {
				$_SESSION["Usuario"]=$sql_d['nombre_usuario'];
				header("Location:../../Ciudadano/Login/Vista/Login.php");
			}
		}
	}
	else{
		echo "<h3 color='white' ><Center>Usted No Es Un Usuario Registrado</Center></h3>";
	}	
}
?>
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