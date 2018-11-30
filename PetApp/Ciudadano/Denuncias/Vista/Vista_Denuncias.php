<!DOCTYPE html>
<html>
<head>
	<title>Denuncias</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
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
            <a class="navbar-brand" href="#">Usuario: <?php echo "".$usuar.""?></a>
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
	

	<div id="ubi">
    <form action="../../Ciudadano/Menu/Ciudadano.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
    </form>

  	<h1 class="display-4">Denuncias</h1>

  	<center>
  	<form action="Vista_Insertar.php">
 	<input type="submit" name="insertar" value="Realizar denuncia" class="btn btn-info" id="inserta">
	</form>
	</center>


<?php
require_once("../Controlador/Controlador_Cedula2.php");
while($Ced=mysqli_fetch_row($resultadod)){
  echo'
  <input type="hidden" name="cedula" value="'.$Ced[0].'">                  
  ';

require_once("../Controlador/Controlador_Denuncias.php");
while($Com=mysqli_fetch_row($resultado)){
	?>


		<div id="centro">
        <div class="caja1">


				<?php
					echo '
					
                    <table class="table">
                    <tr>
                    <thead class="thead-dark">
                    <th>Fecha:'.$Com[1].'-Cedula: '.$Com[3].'</th>
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
                        <th>".$Com[0]."</th>
                        </tr>
                        <tr>
                        <th>Fecha</th>
                        <th>".$Com[1]."</th>
                        </tr>
                        <tr>
                        <th>Descripcion</th>
                        <th>".$Com[2]."</th>
                        </tr>
                        <tr>
                        <th>Cedula</th>
                        <th>".$Com[3]."</th>
                        </tr>
                        ";
					?>


					</table>
            </div>
            </div>


				<?php
	}
}
	if(isset($_POST['eliminar'])){
		echo"<script type='text/javascript'>;
		alert('".$resulta."');
		</script>";

	}
	echo "</table>";

?>


</div>
</div>
</body>
</html>