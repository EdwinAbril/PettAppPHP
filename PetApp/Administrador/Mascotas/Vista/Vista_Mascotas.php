<!DOCTYPE html>
<html>
<head>
	<title>Mascotas</title>
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
        
    <h1 class="display-4">Mascotas</h1>
<?php
require_once("../Controlador/Controlador_Mascotas.php");
while($Mas=mysqli_fetch_row($resultado)){
?>
		<div id="centro">
        <div class="caja1">
				<?php
					echo '
					
                    <table class="table">
                    <tr>
                    <thead class="thead-dark">
                    <th>'.$Mas[1].'</th>
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
                        <th>".$Mas[0]."</th>
                        </tr>
                        <tr>
                        <th>Nombre</th>
                        <th>".$Mas[1]."</th>
                        </tr>
                        <tr>
                        <th>Tipo</th>
                        <th>".$Mas[2]."</th>
                        </tr>
                        <tr>
                        <th>Edad</th>
                        <th>".$Mas[3]."</th>
                        </tr>
                        <tr>
                        <th>Raza</th>
                        <th>".$Mas[4]."</th>
                        </tr>
                        <tr>
                         <th>Foto</th>
                        <th><img src='../../../Uploads/Mascotas_fotos/".$Mas[5]."' width='30' heigth='30'></th>
                        </tr>
                        <tr>
                        <th>Tamaño</th>
                        <th>".$Mas[6]."</th>
                        </tr>
                        <tr>
                        <th>Genero</th>
                        <th>".$Mas[7]."</th>
                        </tr>
                         <tr>
                        <th>Color</th>
                        <th>".$Mas[8]."</th>
                        </tr>
                         <tr>
                        <th>Cedula</th>
                        <th>".$Mas[9]."</th>
                        </tr>
                        <tr>

	<form method='POST' action='Modificar_Mascotas.php'>
	<input type='hidden' name='usu' value='".$Mas[0]."'>
	<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'></th>
	</form>

	<form method='POST' action='../Controlador/Controlador_Eliminar.php'>
	<input type='hidden' name='codma' value='".$Mas[0]."'>
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
?>

</body>
</html>