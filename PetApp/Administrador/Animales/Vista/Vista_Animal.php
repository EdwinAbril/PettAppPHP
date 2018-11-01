<!DOCTYPE html>
<html>
<head>
	<title>Animal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	
</head>
<body>


<div name="tabla">
	<form action="../../Menu/Vista/Administrador.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
<form action="Vista_Insertar.php">
  <input type="submit" name="nuevo" value="Insertar Nuevo Animal" class="btn btn-outline-dark" id="nuevo">
</form>
  <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
<center><h1 class="display-3">Animal</h1></center>
<?php
require_once("../Controlador/Controlador_Consultar.php");
echo "
	<table class='table'>
	<thead class='thead-dark'>
	<tr>

	<th scope='col'>Codigo</th>
	<th scope='col'>Nombre</th>
	<th scope='col'>Tipo</th>
	<th scope='col'>Edad</th>
	<th scope='col'>Raza</th>
	<th scope='col'>Imagen</th>
	<th scope='col'>Tamaño</th>
	<th scope='col'>Genero</th>
	<th scope='col'>Color</th>
	<th scope='col'></th>
	<th scope='col'></th>
	<th scope='col'></th>
	</tr>
	</thead>
	";
while($Ani=mysqli_fetch_row($resultado)){
echo "

	<tr>

	<th scope='col'>".$Ani[0]."</th>
	<th scope='col'>".$Ani[1]."</th>
	<th scope='col'>".$Ani[2]."</th>
	<th scope='col'>".$Ani[3]."</th>
	<th scope='col'>".$Ani[4]."</th>
	<th><img src='../../../Animales_fotos/".$Ani[5]."' width='30' heigth='30'> </th>
	<th scope='col'>".$Ani[6]."</th>
	<th scope='col'>".$Ani[7]."</th>
	<th scope='col'>".$Ani[8]."</th>
	";
	?>
	<?php
	echo "
	<form method='POST' action='Modificar_Animal.php'>
	<input type='hidden' name='usu' value='".$Ani[0]."'>
	<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'><th>
	</form>";
	?>
	
	<?php
	echo "
	<form method='POST' action='../Controlador/Eliminar_Animal.php'>
	<input type='hidden' name='cdani' value='".$Ani[0]."'>
	<th><input type='submit' name='eliminar' value='Eliminar' class='btn btn-danger'><th>
	</form>
	</tr>";
	}
	if(isset($_POST['eliminar'])){
		echo"<script type='text/javascript'>;
		alert('".$resulta."');
		</script>";

	}
	echo "</table>";

?>

</div>
</body>
</html>