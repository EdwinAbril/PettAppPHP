<!DOCTYPE html>
<html>
<head>
	<title>Postulacion</title>
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
    <script src="JS/main1.js"></script>

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
  

	<form action="../../Menu/Vista/Funcionario.php">
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
                <tr>
                <th>Fotocopia Cedula</th>
                <th><a href='../../../Uploads/Cedulapdf/".$Pos[4]."'>".$Pos[4]."</a></th>
                </tr>
                <tr>
                <th>Estrato</th>
                <th>".$Pos[5]."</th>
                </tr>
                <tr>
                <th>Cantidad de Residentes en el Hogar</th>
                <th>".$Pos[6]."</th>
                </tr>
                <tr>
                <th>Ubicacion del Hogar</th>
                <th>".$Pos[7]."</th>
                </tr>
                <tr>
                <th>Tipo de Vivienda</th>
                <th>".$Pos[8]."</th>
                </tr>
                <tr>
                <th>Puntaje de Encuesta</th>
                <th>".$Pos[9]."/20</th>
                </tr>
                <tr>
                <th>Recibo Publico</th>
                <th><a href='../../../Administrador/Recibos/".$Pos[10]."'>".$Pos[10]."</a></th>
                </tr>
                <th>Cedula</th>
                <th>".$Pos[11]."</th>
                </tr>
                  <tr>
                <th>Animal</th>
                <th>".$Pos[12]."</th>
                </tr>
                <tr>

                <form method='POST' action='../../Citacion/Vista/Vista_Citacion.php'>
                <input type='hidden' name='cp' value='".$Pos[0]."'>
                <input type='hidden' name='tel' value='".$Pos[1]."'>
                <input type='hidden' name='dir' value='".$Pos[2]."'>
                <input type='hidden' name='tf' value='".$Pos[3]."'>
                <input type='hidden' name='fot' value='".$Pos[4]."'>
                <input type='hidden' name='est' value='".$Pos[5]."'>
                <input type='hidden' name='cre' value='".$Pos[6]."'>
                <input type='hidden' name='ubi' value='".$Pos[7]."'>
                <input type='hidden' name='tvi' value='".$Pos[8]."'>
                <input type='hidden' name='pun' value='".$Pos[9]."'>
                <input type='hidden' name='rpu' value='".$Pos[10]."'>
                <input type='hidden' name='cedu' value='".$Pos[11]."'>
                <input type='hidden' name='an' value='".$Pos[12]."'>
                <th><input type='submit' name='aceptar' class='btn btn-primary' value='Aceptar'></th>
                </form> 

                <form method='POST' action='../Controlador/Controlador_Rechazar.php'>
                <th><input type='submit' name='rechazar1' class='btn btn-danger'value='Rechazar'></th>
                <input type='hidden' name='ced' value='".$Pos[12]."'>
                <input type='hidden' name='postu' value='".$Pos[0]."'>
                <input type='hidden' name='mensarech' value='El proceso de Adopcion no fue Aceptado en el menu principal encontrara informacion de contacto'>
                </form>
	            ";
	

?>


</table>
</div>




    </div>
	<?php
    if(isset($_POST['aceptar']))
{
    echo "<script type='text/javascript'>;
    swal('".$result."');
    </script>";
}
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