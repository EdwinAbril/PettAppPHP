<!DOCTYPE html>
<html>
<head>
	<title>Ciudadano</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container" name="tabla">
	 <form action="Vista_Insertar.php">
  <input type="submit" name="nuevo" value="Insertar Nuevo Ciudadano" class="btn btn-outline-dark" id="nuevo">
</form>
  <form action="../../Menu/Vista/Administrador.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
  <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
<center><h1 class="display-3">Ciudadano</h1></center>
<?php
require_once("../Controlador/Controlador_Vista.php");
echo "
	<table class='table'>
	<thead class='thead-dark'>
	<tr>

	<th scope='col'>Cedula</th>
	<th scope='col'>Nombre</th>
	<th scope='col'>Telefono</th>
	<th scope='col'>Direccion</th>
	<th scope='col'>Correo</th>
	<th scope='col'></th>
	<th scope='col'></th>
	<th scope='col'></th>
	</tr>
	</thead>
	";
while($Ciu=mysqli_fetch_row($resultado)){
echo "
	
	<tr>

	<th scope='col'>".$Ciu[0]."</th>
	<th scope='col'>".$Ciu[1]."</th>
	<th scope='col'>".$Ciu[2]."</th>
	<th scope='col'>".$Ciu[3]."</th>
	<th scope='col'>".$Ciu[4]."</th>";
	?>
	<?php
	echo "
	<form method='POST' action='Modificar_Ciudadano.php'>
	<input type='hidden' name='usu' value='".$Ciu[0]."'>
	<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'><th>
	</form>"; 
	?>
	<?php
	echo "
	<form method='POST' action='../Controlador/Controlador_Eliminar.php'>
	<input type='hidden' name='ced' value='".$Ciu[0]."'>
	<th><input type='submit' name='eliminar' value='Eliminar' class='btn btn-danger'><th>
	</form>
	</tr>
	";
	}
	if(isset($_POST['eliminar'])){
		echo"<script type='text/javascript'>;
		alert('".$resulta."');
		</script>";

	}
	echo "</table>";



?>

</form>
</div>
</body>
</html>