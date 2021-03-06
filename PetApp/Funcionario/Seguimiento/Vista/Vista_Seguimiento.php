<!DOCTYPE html>
<html>
<head>
	<title>Seguimiento</title>
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
                <th>Telefono Fijo</th>
                <th>".$Seg[4]."</th>
                </tr>
                <tr>
                <th>Fotocopia de Cedula</th>
                <th><a href='../../../Uploads/Cedulapdf/".$Seg[5]."'>".$Seg[5]."</a></th>
                </tr>
                <tr>
                <th>Estrato</th>
                <th>".$Seg[6]."</th>
                </tr>
                <tr>
                <th>Canditad de Residentes</th>
                <th>".$Seg[7]."</th>
                </tr>
                <tr>
                <th>Ubicacion del Hogar</th>
                <th>".$Seg[8]."</th>
                </tr>
                <tr>
                <th>Tipo de Vivienda</th>
                <th>".$Seg[9]."</th>
                </tr>
                <tr>
                <th>Puntaje de Encuesta</th>
                <th>".$Seg[10]."/20</th>
                </tr>
                <tr>
                <th>Recibo Publico</th>
                <th><a href='../../../Uploads/Recibos/".$Seg[11]."'>".$Seg[11]."</a></th>
                </tr>
                <tr>
                <th>Cedula del Postulante</th>
                <th>".$Seg[12]."</th>
                </tr>
                <tr>
                <th>Codigo del Animal</th>
                <th>".$Seg[13]."</th>
                </tr>
                <tr>
                <th>Fecha de la Citacion</th>
                <form method='POST' action='../Vista/Vista_Citacion.php'>
                    <th>".$Seg[14]."
                            <input type='hidden' name='pos' value='".$Seg[1]."'>
                            <input type='image' src='Imagenes/modificar.png' name='modificar'  class='btn btn-link' height'60' width='60'>
                    </th>
                </form>
                </tr>
                <tr>
                <th>Confirmacion Visita</th>
                <th><img src='../../../Uploads/Citacion/".$Seg[15]."' width='30' heigth='30'></th>
                </tr>
                <tr>
                <form method='POST' action='../../Respuestas/Vista/Vista_RespuestaPositiva.php'>
                <input type='hidden' name='celuda' value='".$Seg[12]."'>
                <input type='hidden' name='aimal' value='".$Seg[13]."'>

                <th><input type='submit' name='aceptar' class='btn btn-primary' value='Aceptar'></th>
                </form> 
                <form method='POST' action='../Controlador/Controlador_Rechazar.php'>
                <th><input type='submit' name='rechazar2' class='btn btn-danger' value='Rechazar'></th>
                <input type='hidden' name='ced' value='".$Seg[12]."'>
                <input type='hidden' name='pos' value='".$Seg[1]."'>
                <input type='hidden' name='mensarecha' value='El proceso de Adopcion no fue aceptado en el Menu principal encontrara informacion de contacto'>
                </form>
                </tr>

	<form method='POST' action='Modificar_Seguimiento.php'>
	<input type='hidden' name='usu' value='".$Seg[0]."'>
	<th><input type='image' src='Imagenes/editar.png' name='modificar'  class='btn btn-link' height='60' width='60'></th>
	</form>
	<form method='POST' action='../Controlador/Controlador_Eliminar.php'>
	<input type='hidden' name='cdseg' value='".$Seg[0]."'>
	<th><input type='image' src='Imagenes/eliminar.png' name='eliminar'  class='btn btn-link' height'60' width='60'></th>
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