<!DOCTYPE html>
<html>
<head>
	
	<title>Usuario Ciudadano</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../../../CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../../../CSS/style.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/Estilos.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  	<script src="../../../js/jquery-3.3.1.min.js"></script>
    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/scripts.js"></script>
    <script src="../Vista/JS/main.js"></script>
    <script type="text/javascript">history.forward();</script>
    
</head>

<body>

	<form action="../../USUARIOS/USUARIOS.php">
  		<input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" >
	</form>
  	
  	<input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">

	<h3 class="display-4">Usuario Ciudadano</h3>
		<?php
		require_once("../Controlador/Controlador_vista.php");
		while($Usu=mysqli_fetch_row($resultado)){
		?>
		<div id="centro">
        <div class="caja1">
				<?php
					echo '
					
                    <table class="table">
                    <tr>
                    <thead class="thead-dark">
                    <th>'.$Usu[0].'</th>
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
                        <th>".$Usu[0]."</th>
                        </tr>
                        <tr>
                        <th>Clave</th>
                        <th>".$Usu[1]."</th>
                        </tr>
                        <tr>
					
			
					<form method='POST' action='Modificar_Usuario.php'>
					<input type='hidden' name='usu' value='".$Usu[0]."'>
					<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'></th>
					</form>
					
					<form method='POST' action='../Controlador/Controlador_Eliminar_Administrador.php'>
					<input type='hidden' name='usu' value='".$Usu[0]."'>
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