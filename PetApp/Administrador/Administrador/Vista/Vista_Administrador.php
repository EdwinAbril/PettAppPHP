<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="Estilos.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/main.js"></script>
</head>

<body>
	<form action="Vista_insertar.php">
  		<input type="submit" name="nuevo" value="Insertar Nuevo Administrador" class="btn btn-outline-dark" id="nuevo">
	</form>

	<form action="../../Menu/Vista/Administrador.php">
  		<input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
	</form>
  	
  	<input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">

	<h3 class="display-3">Administrador</h3>
		<?php
		require_once("../Controlador/Controlador_Administrador.php");
		while($Adm=mysqli_fetch_row($resultado)){
		?>
			<table class="table">
				<div class="nombre">
				<?php
					echo "
					<tr>
					<thead class='thead-dark'>
					<th scope='col'>Usuario</th>
					<th scope='col'>".$Adm[0]."</th>
					</thead>
					</tr>";
				?>
				</div>
			
				<div class="datos">
					<?php
					echo "
					<tr>
					<th scope='col'>Clave</th>
					<th scope='col'>".$Adm[1]."</th>
					</tr>

					<tr>
					<th scope='col'>Rol</th>
					<th scope='col'>".$Adm[2]."</th>
					</tr>
					
			
					<tr>
					<form method='POST' action='Modificar_Administrador.php'>
					<input type='hidden' name='usu' value='".$Adm[0]."'>
					<th><span><input type='submit' name='modificar' value='Modificar' class='btn btn-info'></span></th>
					</form>
					
					<form method='POST' action='../Controlador/Controlador_Eliminar_Administrador.php'>
					<input type='hidden' name='usu' value='".$Adm[0]."'>
					<th><span><input type='submit' name='eliminar' value='Eliminar' class='btn btn-danger'></span></th>
					</form>
					</tr>";
					?>
				</div>
				<?php
			}
			
			if(isset($_POST['eliminar'])){
				echo"<script type='text/javascript'>;
				alert('".$resulta."');
				</script>";

			}
			

		?>
	</table>
