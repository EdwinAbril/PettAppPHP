<!DOCTYPE html>
<html>
<head>
	<title>Postulacion</title>
      <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                            <a class="navbar-brand" href="">Usuario: <?php echo "".$usuar.""?></a>
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

    <?php
    require_once("../Controlador/Controlador_Cedula.php");
    while($Ced=mysqli_fetch_row($resultado)){
    ?>
    <div id="top">
    <form action="../../Ciudadano/Menu/Ciudadano.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>

    <div id="ubi">
    <div id="insertar" >
	<h1>Postularme</h1>


    <form action="../Controlador/Controlador_Insertar.php" method="Post"  enctype="multipart/form-data">
 	    <?php

        $cod=$_POST["codi"];
        ?>
           </br>
        </br>

        <label>Celular</label><input type="tel" name="telefono" pattern="[0-9]{10}" required="telefono" 
        class="form-control">
    	<label>Direccion</label><input type="text" name="direccion" class="form-control">
    	<label>Telefono Fijo</label><input type="tel" name="fijo" pattern="[0-9]{7}" class="form-control">
        <label>Certificado Laboral</label><input type="file" name="certificado" accept="aplication/pdf" id="cer" class="form-control-file"><?php
        echo"
        <input type='hidden' name='cedula' value='".$Ced[0]."'>
        <input type='hidden' name='codi'  value='".$cod."'>";
        }
        ?>   
           
        <input type="submit" name="consulta" value="Postularme" class="btn btn-primary">

    </form>
</div>

    <?php
        if(isset($_POST['consulta']))
        {
        	echo "<script type='text/javascript'>;
        	swal('".$result."');
        	</script>";
        }
    ?>
</div>
</div>
</body>
</html>