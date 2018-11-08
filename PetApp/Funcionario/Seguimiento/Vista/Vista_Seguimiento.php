<!DOCTYPE html>
<html>
<head>
	<title>Seguimiento</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/main.js"></script>

</head>
<body>

	<form action="Vista_Insertar.php">
  	<input type="submit" name="nuevo" value="Insertar" class="btn btn-outline-dark" id="nuevo">
  	</form>

	<div name="tabla">
	<form action="../../Menu/Vista/Funcionario.php">
 	<input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
  	</form>
  	<input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
	<center><h1 class="display-3">Seguimiento</h1></center>

<?php

require_once("../Controlador/Controlador_Seguimiento.php");
while($Seg=mysqli_fetch_row($resultado)){
	
?>

	<div id="centro">
    <div class="caja1">
		<?php
			echo '
			
            <table class="table">
            <tr>
            <thead class="thead-dark">
            <th>'.$Seg[0].'</th>
            </thead>
            </tr>
            </table>

        	';
		?>
		</div>
		<div class='caja2'>
            <table class='table'>
        <?php
			echo "
			    <tr>
                <th>Codigo</th>
                <th>".$Seg[0]."</th>
                </tr>
                <tr>
                <th>Postulacion</th>
                <th>".$Seg[1]."</th>
                </tr>
                <tr>

	<form method='POST' action='Modificar_Seguimiento.php'>
	<input type='hidden' name='usu' value='".$Seg[0]."'>
	<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'></th>
	</form>";
	?>
	<?php
	echo "
	<form method='POST' action='../Controlador/Controlador_Eliminar.php'>
	<input type='hidden' name='cdseg' value='".$Seg[0]."'>
	<th><input type='submit' name='eliminar' value='Eliminar' class='btn btn-danger'></th>
	</form>
	</tr>
	";
	?>
	</table>
    </div>
    </div>
	<?php
	}
	if(isset($_POST['eliminar'])){
		echo"<script type='text/javascript'>;
		alert('".$resulta."');
		</script>";

	}
	echo "</table>";



?>

</body>
</html>