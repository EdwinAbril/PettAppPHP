<!DOCTYPE html>
<html>
<head>
	<title>Ciudadano</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="CSS/Estilos.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  	<script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/main.js"></script>
    
</head>

<body>
	<?php
    session_start();
    if (!$_SESSION) {
        echo '<script type="text/javascript">
              alert("Usuario no Autenticado");
              self.location=../../../Login/Vista/login.php;
              </script>';  
    }
    else{
        $usuar=$_SESSION["Usuario"];
    }
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark fixed-top">
               
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="../../Login/Vista/login.php">PetApp</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav ml-md-auto">
                            <a class="navbar-brand" href="../../../Login/Vista/login.php">Usuario: <?php echo "".$usuar.""?></a>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><input type="image" src="../../Imagenes/perros.jpg" height="40" width="40" id="imgcir"></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../../Ciudadano/Vista/Vista_Ciudadano.php">Perfil</a> <a class="dropdown-item" href="#">Notificaciones</a>
                            <div class="dropdown-divider">
                        </div> <a class="dropdown-item" href="../../../Cerrar.php">Cerrar Sesion</a>
                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    <div id="top">
	<form action="../Menu/Ciudadano.php">
  		<input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vo">
	</form>
  	
  	<div id="ubi">
	<h3 class="display-4">Ciudadano</h3>
		<?php
		require_once("../Controlador/Controlador_vista.php");
		while($Ciu=mysqli_fetch_row($resultado)){
		?>
			<div id="centro">
        	<div class="caja1">
			<?php
				echo '
				
                <table class="table">
                <tr>
                <thead class="thead-dark">
                <th>'.$Ciu[1].'</th>
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
		        <th>Cedula</th>
		        <th>".$Ciu[0]."</th>
		        </tr>
		        <tr>
		        <th>Nombre</th>
		        <th>".$Ciu[1]."</th>
		        </tr>
		        <tr>
		        <th>Telefono</th>            
		        <th>".$Ciu[2]."</th>
		        </tr>
		        <tr>
		        <th>Direccion</th>
		        <th>".$Ciu[3]."</th>
		        </tr>
		        <tr>
		        <th>Correo</th>
		        <th>".$Ciu[4]."</th>
		        </tr>
		        <tr>";

			?>

			<?php
			echo "
			<form method='POST' action='Modificar_Ciudadano.php'>
			<input type='hidden' name='usu' value='".$Ciu[0]."'>
			<th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'></th>
			</form>"; 
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
	
	</div>
    </div>
	
</body>
</html>