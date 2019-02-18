<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="EstilosModificar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Ciudadano</title>
    </head>
    
    <body id="fondox">

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

    <div id="ubi">
    <div id="padre">
    <div id="modificar" class="form-group">
    <?php
    $usu=$_POST["usu"];
    $nom=$_POST["nom"];
    ?>

    <h1>Ciudadano</h1>
    <p>Cedula</p><?php echo $nom?>
    <?php
	require_once("../Controlador/Controlador_Modificar_Ciudadano.php");
	while($Usu=mysqli_fetch_row($resultado)){
    while($Ciu=mysqli_fetch_row($resultado2)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Ciudadano.php' method='Post' enctype='multipart/form-data'>

    <div id='centro'>
    <p>Foto</p><label class='botonModi'><img src='../../../Uploads/Usuarios_Fotos/".$Usu[3]."'' style='width:180px;height:180px;border-radius: 150px;' id='fotomod'><input type='file' class='file' name='fos' accept='image/jpeg,image/png'><img src='../Vista/Imagenes/Icono.png' width='40' heigth='40'></label>
    </div>

    <input type='hidden' name='fotosi' value='".$Usu[3]."'>
	<input type='hidden' name='usu' value='".$Usu[0]."'>
    <input type='hidden' name='nom' value='".$Ciu[0]."'> 
    <input type='hidden' name='nombre' value='".$Ciu[1]."'>  

    <p>Nombre</p><p>".$Ciu[1]."</p>  
    <p>Celular</p><input type='text' name='tel' pattern='[0-9]{10}' value='".$Ciu[2]."'>
    <p>Direccion</p><input type='text' name='dir'  value='".$Ciu[3]."'>
    <p>Correo</p><input type='email' name='cor'  value='".$Ciu[4]."'>
    <p>Clave</p><input type='password' name='cla'  value='".$Usu[1]."'>

    <input type='submit' name='botonfunci' value='Modificar' class='btn btn-primary'>

    </form>";

	}}
	
	if(isset($_POST['botonfunci'])){
		echo"<script type='text/javascript'>;
		alert('".$result."');
		</script>";

	}

	?>
    </div>
    </div>
</div>
</div>
    </body>
</html>