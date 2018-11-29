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
    <script type="text/javascript">history.forward();</script>

</head>
<body>
	
	<?php
    session_start();
    if (!$_SESSION) {
    echo '<script type="text/javascript">
          alert("Usuario no Autenticado");
          location="../../../Login/Vista/login.php";
          </script>';  
    }
    else{
    $usuar=$_SESSION["Usuario"];
    }
    ?>

	<form action="Vista_Insertar.php">
  		<input type="submit" name="nuevo" value="Insertar" class="btn btn-outline-dark" id="nuevo">
  	</form>
	
	<form action="../../Menu/Vista/Administrador.php">
  		<input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
  	</form>
  
  	<form action="../../../Cerrar.php">
        <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
    </form>

<h1 class="display-4">Seguimiento</h1>
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
                <th>Codigo de Seguimiento</th>
                <th>".$Seg[0]."</th>
                </tr>
                <tr>
                <th>Codigo de Postulacion</th>
                <th>".$Seg[1]."</th>
                </tr>
                  <tr>
                <th>Telefono</th>
                <th>".$Seg[2]."</th>
                </tr>
                  <tr>
                <th>Direccion</th>
                <th>".$Seg[3]."</th>
                </tr>
                  <tr>
                <th>Telefono</th>
                <th>".$Seg[4]."</th>
                </tr>
                  <tr>
                <th>Cedula del Postulante</th>
                <th>".$Seg[5]."</th>
                </tr>
                  <tr>
                <th>Codigo del Animal</th>
                <th>".$Seg[6]."</th>
                </tr>
                <tr>

	<form method='POST' action='Modificar_Seguimiento.php'>
	<input type='hidden' name='usu' value='".$Seg[0]."'>
	<th><input type='image' src='Imagenes/editar.png' name='modificar'  class='btn btn-link' height='60' width='60'></th>
	</form>

  ";
	?>


	<?php
	echo "
	<form method='POST' action='../Controlador/Controlador_Eliminar.php'>
	<input type='hidden' name='cdseg' value='".$Seg[0]."'>
	<th><input type='image' src='Imagenes/eliminar.png' name='eliminar'  class='btn btn-link' height'60' width='60'></th>
	</form>
	</tr>
	";
	?>

  <?php
echo"
<form method='POST' action='../../Respuestas/Vista/Vista_RespuestaPositiva.php'>
<input type='hidden' name='cedula' value='".$Seg[5]."'>
<th><input type='submit' name='aceptar' class='btn btn-primary' value='Aceptar'></th>
</form> 
";
?>
<?php
echo "<form method='POST' action=''>
<th><input type='submit' name='rechazar2' class='btn btn-danger' value='Rechazar'></th>
</form>
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