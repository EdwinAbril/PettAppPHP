<!DOCTYPE html>
<html>
<head>
	<title>Eventos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<form action="Vista_Insertar.php">
  <input type="submit" name="nuevo" value="Insertar Nuevo Evento" class="btn btn-outline-dark" id="nuevo">
  	</form>

<div name="tabla">
	<form action="../../Menu/Vista/Administrador.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
  	</form>
  <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
<center><h1 class="display-3">Eventos</h1></center>
<?php
require_once("../Controlador/Controlador_Eventos.php");
echo "
	<table class='table'>
	<thead class='thead-dark'>
	<tr>

	<th scope='col'>Codigo</th>
	<th scope='col'>Fecha</th>
	<th scope='col'>Lugar</th>
	<th scope='col'>Duracion</th>
	<th scope='col'>Descripcion</th>
	<th scope='col'></th>
	<th scope='col'></th>
	<th scope='col'></th>
	<th scope='col'></th>
	</tr>
	</thead>
	";
while($Eve=mysqli_fetch_row($resultado)){
echo "

	<tr>

	<th scope='col'>".$Eve[0]."</th>
	<th scope='col'>".$Eve[1]."</th>
	<th scope='col'>".$Eve[2]."</th>
	<th scope='col'>".$Eve[3]."</th>
	<th scope='col'>".$Eve[4]."</th>";
	?>
	
	<?php
	echo "
	<form method='POST' action='Modificar_Eventos.php'>
	<input type='hidden' name='usu' value='".$Eve[0]."'>
	<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'><th>
	</form>";
	?>
	
	<?php
	echo "
	<form method='POST' action='../Controlador/Controlador_Eliminar.php'> 
	<input type='hidden' name='codev' value='".$Eve[0]."'>
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