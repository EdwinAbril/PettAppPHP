<!DOCTYPE html>
<html>
<head>
	<title>Postulacion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/main.js"></script>

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
    
<h1 class="display-4">Postulacion</h1>
<?php
require_once("../Controlador/Controlador_Postulacion.php");
while($Pos=mysqli_fetch_row($resultado)){
?>
	<div id="centro">
    <div class="caja1">
		<?php
			echo '
			
            <table class="table">
            <tr>
            <thead class="thead-dark">
            <th>'.$Pos[0].'</th>
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
                <th>".$Pos[0]."</th>
                </tr>
                <tr>
                <th>Telefono</th>
                <th>".$Pos[1]."</th>
                </tr>
                <tr>
                <th>Direccion</th>
                <th>".$Pos[2]."</th>
                </tr>
                <tr>
                <th>Telefono Fijo</th>
                <th>".$Pos[3]."</th>
                </tr>
                <tr>
                <th>Certificado Laboral</th>
                <th>".$Pos[4]."</th>
                </tr>
                <tr>
                <th>Cedula</th>
                <th>".$Pos[5]."</th>
                </tr>
                  <tr>
                <th>Animal</th>
                <th>".$Pos[6]."</th>
                </tr>
                <tr>


	<form method='POST' action='Modificar_Postulacion.php'>
	<input type='hidden' name='usu' value='".$Pos[0]."'>
	<th><input type='image' src='Imagenes/editar.png' name='modificar' class='btn btn-link' height='60' width='60'></th>
	</form>";
	?>
	<?php
	echo "
	<form method='POST' action='../Controlador/Controlador_Eliminar.php'>
	<input type='hidden' name='codp' value='".$Pos[0]."'>
	<th><input type='image' src='Imagenes/borrar.png' name='eliminar' class='btn btn-link' height='60' width='60' ></th>
	</form>
	</tr>
	";
	?>
<?php

echo"
<form method='POST' action='../Controlador/Controlador_Seguimiento.php'>
<input type='hidden' name='cp' value='".$Pos[0]."'>
<input type='hidden' name='tel' value='".$Pos[1]."'>
<input type='hidden' name='dir' value='".$Pos[2]."'>
<input type='hidden' name='tf' value='".$Pos[3]."'>
<input type='hidden' name='ced' value='".$Pos[5]."'>
<input type='hidden' name='an' value='".$Pos[6]."'>
<th><input type='submit' name='aceptar' class='btn btn-primary' value='Aceptar'></th>
</form> 
"
?>

<?php
echo"
<form method='POST' action=''>
<th><input type='submit' name='rechazar' class='btn btn-danger'value='Rechazar'></th>
</form>
"
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

</form>
</div>
</body>
</html>