<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="../../../Bst/3.3.7/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/3.3.7/CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../../../Bst/3.3.7/CSS/style.css" rel="stylesheet">
    <script src="../../../Bst/3.3.7/js/jquery-3.3.1.min.js"></script>
    <script src="../../../Bst/3.3.7/js/jquery.min.js"></script>
    <script src="../../../Bst/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../../Bst/3.3.7/js/scripts.js"></script>min.js" ></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container" name="tabla">
	<form action="../../Menu/Vista/Funcionario.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
  	</form>
  <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
<center><h1 class="display-3">Usuario</h1></center>
<?php
require_once("../Controlador/Controlador_Usuario.php");
echo "
	<table class='table'>
	<thead class='thead-dark'>
	<tr>

	<th scope='col'>Cedula</th>
	<th scope='col'>Nombre</th>
	<th scope='col'>Clave</th>
	<th scope='col'>Rol</th>
	<th scope='col'></th>
	<th scope='col'></th>
	<th scope='col'></th>
	<th scope='col'></th>
	</tr>
	</thead>
	";
while($Usu=mysqli_fetch_row($resultado)){
echo "

	<tr>

	<th scope='col'>".$Usu[0]."</th>
	<th scope='col'>".$Usu[1]."</th>
	<th scope='col'>".$Usu[2]."</th>
	<th scope='col'>".$Usu[3]."</th>";
	?>
	<form action="Modificar_Usuario.php">
	<?php
	echo "
	<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'><th>";
	?>
	</form>
	<?php
	echo "
	<th><input type='submit' name='eliminar' value='Eliminar' class='btn btn-danger'><th>
	</tr>
	";
	}
	echo "</table>";



?>

</form>
</div>
</body>
</html>