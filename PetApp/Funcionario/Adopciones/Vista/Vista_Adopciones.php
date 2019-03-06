<!DOCTYPE html>
<html>
<head>
	<title>Adopciones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/style.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/jquery-3.3.1.min.js"></script>
    <script src="../../../Bst/4.3.1/js/jquery.min.js"></script>
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
  	<script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/main.js"></script>

  	</head>
<body>

	<form action="../../Menu/Vista/Funcionario.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="voler">
	</form>



  	<input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
	<center><h1 class="display-4">Adopciones</h1></center>

<?php
	require_once("../Controlador/Controlador_Adopciones.php");
	while($Ado=mysqli_fetch_row($resultado)){
?>
		<div id="centro">
        <div class="caja1">
	<?php
	echo '
					
            <table class="table">
            <tr>
            <thead class="thead-dark">
            <th>'.$Ado[0].'</th>
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
        <th>Adopcion</th>
        <th>".$Ado[0]."</th>
        </tr>
        <tr>
        <th>Animal</th>
        <th>".$Ado[1]."</th>
        </tr>
        <tr>
        <th>Seguimiento</th>
        <th>".$Ado[2]."</th>
        </tr>
        <tr>
        <th>Mensaje</th>
        <th>".$Ado[3]."</th>
        </tr>
        <tr>


	<form method='POST' action='Modificar_Adopciones.php'>
	<input type='hidden' name='usu' value='".$Ado[0]."'>
	<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'></th>
	</form>";
	?>
	<?php
	echo "
	<form method='POST' action='../Controlador/Controlador_Eliminar.php'>
	<input type='hidden' name='coda' value='".$Ado[0]."'>
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