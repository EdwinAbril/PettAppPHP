<!DOCTYPE html>
<html>
<head>
	<title>Insertar Denuncias</title>
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
    <?php
    require_once("../Controlador/Controlador_Cedula.php");
    while($Ced=mysqli_fetch_row($resultado)){
    ?>
    <div id="top">
        <form action="Vista_Denuncias.php">
            <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
        </form>
    <div id="ubi">
    <div id="padre">
    <div id="insertar" class="form-group">
	<h1>Denunciar</h1>
    <form action="../Controlador/Controlador_Insertar.php"" method="Post"  enctype="multipart/form-data">
 	    <label>Fecha De la Denuncia</label><input type="date" name="fecha" required="" class="form-control">
    	<label>Tipo </label><select  name="tipo" required="" class="form-control">
            <option>Tipo de Denuncia</option>
            <option>Maltrato</option>
            <option>Abandono</option>
        </select>
    	<label>Cedula del Denunciante</label><input type="number" name="cedula" required="" class="form-control">
    	<label>Denuncia</label><input type="text" name="denuncia" required="" class="form-control">
    	<div id="foto">
        <label>Foto</label><input type="file" name="imagen" id="quitar" accept="image/png,image/jpeg,image/jpg" class="form-control-file">
        </div>
        <div class="form-group" id="bot">
    	<input type="submit" name="consulta" value="Realizar Denuncia" class="btn btn-primary">
        </div>
    </form>
</div>
</div>
    <?php
    }
    if(isset($_POST['consulta'])){
	  echo "<script type='text/javascript'>;
	  swal('".$resulta."');
	  </script>";
    }
  ?>
</div>
</div>
</body>
</html>