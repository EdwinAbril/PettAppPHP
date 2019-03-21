<!DOCTYPE html>
<html>
<head>
	<title>Eventos</title>
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
                                    <?php
                                      require_once("../../Menu/Controlador/Controlador_Usuario.php");
                                      while($Usu=mysqli_fetch_row($resultado)){
                                      ?>
                                     <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">
                                      <?php echo "
                                      <img src='../../../Uploads/Usuarios_Fotos/".$Usu[3]."' class='fotomod' 
                                      style='width:50px;height:50px;border-radius:200px 200px;'>";}?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../../Ciudadano/Vista/Vista_Ciudadano.php">Perfil</a> <a class="dropdown-item" href="#">Respuestas</a><a class="dropdown-item" href="../../Menu/Vista/Ciudadano.php">Menu</a>
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
    <form action="../../Menu/Vista/Ciudadano.php">
        <input type="submit" name="volver" value="Menu" class="btn btn-outline-dark" id="vol">
  	</form>
    <div id="ubi">
    <h1 class="display-4">Eventos</h1>
<?php
require_once("../Controlador/Controlador_Eventos.php");
while($Eve=mysqli_fetch_row($resultado)){
echo "
		<div id='centro'>
        <div class='caja1'>
					
					
                    <table class='table'>
                    <tr>
                    <thead class='thead-dark'>
                    <th>".$Eve[2]."</th>
                    </thead>
                    </tr>
                    </table>
                    
				</div>
				<div class='caja2'>
                    <table class='table'>
                    <tr>
                   
                        <tr>
                        <th>Fecha</th>
                        <th>".$Eve[1]."</th>
                        </tr>
                        <tr>
                        <th>Lugar</th>
                        <th>".$Eve[2]."</th>
                        </tr>
                        <tr>
                        <th>Hora</th>
                        <th>".$Eve[3]."</th>
                        </tr>
                        <tr>
                        <th>Descripcion</th>
                        <th>".$Eve[4]."</th>
                        </tr>
                        <tr>
                            <th colspan=2><img src='../../../Uploads/Eventos_fotos/".$Eve[5]."' width='300' heigth='300'></th>
                        </tr>
                       
				</table>
                </div>
                </div>
                ";
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