<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="CSS/Estilos.css">
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
	<form action="Vista_insertar.php">
  		<input type="submit" name="nuevo" value="Insertar" class="btn btn-outline-dark" id="nuevo">
	</form>

	<form action="../../Menu/Vista/Administrador.php">
  		<input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
	</form>
  	<form action="../../../Cerrar.php">
  		<input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
  	</form>

	<h3 class="display-4">Administrador</h3>
	
		<?php
		require_once("../Controlador/Controlador_Administrador.php");
		while($Adm=mysqli_fetch_row($resultado)){
		?>
		<div id="centro">
        <div class="caja1">
				<?php
					echo '
					
                    <table class="table">
                    <tr>
                    <thead class="thead-dark">
                    <th>'.$Adm[0].'</th>
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
                        <th>Usuario</th>
                        <th>".$Adm[0]."</th>
                        </tr>
                        <tr>
                        <th>Clave</th>
                        <th>".$Adm[1]."</th>
                        </tr>
                        <tr>
					
			
					<form method='POST' action='Modificar_Administrador.php'>
					<input type='hidden' name='usu' value='".$Adm[0]."'>
					<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'></th>
					</form>
					
					<form method='POST' action='../Controlador/Controlador_Eliminar_Administrador.php'>
					<input type='hidden' name='usu' value='".$Adm[0]."'>
					<th><input type='submit' name='eliminar' value='Eliminar' class='btn btn-danger'></th>
					</form>
					</tr>";
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