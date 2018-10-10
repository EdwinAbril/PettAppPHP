<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Estilo.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<script>
  		function EnviarDato($cod){
		window.location="Modificar_Administrador.php?envidat="+$cod+"";
		}
	</script>
</head>

<body>


<div class="container" name="tabla">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
  <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
<center><h1 class="display-3">Administrador</h1></center>
<?php
require_once("../Controlador/Controlador_Administrador.php");
echo "
	<table class='table'>
	<thead class='thead-dark'>
	<tr>

	<th scope='col'>Usuario</th>
	<th scope='col'>Clave</th>
	<th scope='col'>Rol</th>
	<th scope='col'></th>
	<th scope='col'></th>
	<th scope='col'></th>
	<th scope='col'></th>
	</tr>
	</thead>
	";
while($Adm=mysqli_fetch_row($resultado)){
echo "

	<tr>

	<th scope='col'>".$Adm[0]."</th>
	<th scope='col'>".$Adm[1]."</th>
	<th scope='col'>".$Adm[2]."</th>";
	?>
	<?php
	echo "
	<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info' onclick='EnviarDato(".$Adm[0].")'><th>";
	?>
	<?php
	echo "
	<th><input type='submit' name='eliminar' value='Eliminar' class='btn btn-danger'><th>
	</tr>
	";
	}
	echo "</table>";


?>
