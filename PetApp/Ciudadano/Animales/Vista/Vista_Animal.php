<!DOCTYPE html>
<html>
<head>
	<title>Animal</title>
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
              </button> <a class="navbar-brand" href="../../../Login/Vista/login.php">PetApp</a>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="navbar-nav ml-md-auto">
                  <a class="navbar-brand" href="../../../Login/Vista/login.php">Usuario: <?php echo "".$usuar.""?></a>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><input type="image" src="../../Imagenes/perros.jpg" height="40" width="40" id="imgcir"></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                       <a class="dropdown-item" href="../Vista/Vista_Ciudadano.php">Perfil</a> <a class="dropdown-item" href="#">Notificaciones</a>
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
	<form action="../../Ciudadano/Menu/Ciudadano.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="voler">
    </form>
    <div id="ubi">
    <h1 class="display-4">Animal</h1>

    <?php
    
	require_once("../Controlador/Controlador_Consultar.php");
	while($Ani=mysqli_fetch_row($resultado)){
		?>
		<div id="centro">
        <div class="caja1">
		<?php
		echo "
		<table class='table'>
            <tr>
            <thead class='thead-dark'>
            <th>".$Ani[1]."</th>
            </thead>
            </tr>
            </table>
		<tr>";
		?>
		</div>
		<div class='caja2'>
            <table class='table'>
        <?php
        echo "
            <tr>
            <th>Codigo</th>
            <th>".$Ani[0]."</th>
            </tr>
            <tr>
            <th>Nombre</th>
            <th>".$Ani[1]."</th>
            </tr>
            <tr>
            <th>Tipo</th>            
            <th>".$Ani[2]."</th>
            </tr>
            <tr>
            <th>Edad</th>
            <th>".$Ani[3]."</th>
            </tr>
            <tr>
            <th>Raza</th>
            <th>".$Ani[4]."</th>
            </tr>
            <th>Foto</th>
            <th><img src='../../../Animales_fotos/".$Ani[5]."' width='30' heigth='30'></th>
            </tr>
            <th>Tamaño</th>
            <th>".$Ani[6]."</th>
            </tr>
            <th>Genero</th>
            <th>".$Ani[7]."</th>
            <tr>
            <th>Color</th>
            <th>".$Ani[8]."</th>
            </tr>
            <tr>
				
		";
		?>
        <?php
        echo "
                 <form method='POST' action='../../Postulacion/Vista/Vista_Insertar.php'>
                            <input type='hidden' name='codi' value='".$Ani[0]."'>
                  <input type='image' name='readop' heigth='100px' width='100px' src='Imagenes/adoptame.png' class='img-responsive slideanim' id='logoadopta'  >
                  <h1>Adoptame</h1>
                
                </form>"
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

</div>
</div>
</body>
</html>