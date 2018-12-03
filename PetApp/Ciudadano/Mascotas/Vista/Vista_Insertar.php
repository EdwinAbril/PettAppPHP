<!DOCTYPE html>
<html>
<head>
	<title>Insertar Mascota</title>
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
                       <a class="dropdown-item" href="../../Ciudadano/Vista/Vista_Ciudadano.php">Perfil</a> <a class="dropdown-item" href="#">Notificaciones</a><a class="dropdown-item" href="../../Menu/Vista/Ciudadano.php">Menu</a>
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
        <form action="../Vista/Vista_Mascotas.php">
          <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
      </form>
    <div id="ubi">
<div id="padre">
    <div id="insertar" class="form-group">
    <h1>Insertar Mascota</h1>
 <form action="../Controlador/Controlador_Insertar.php"" method="Post"  enctype="multipart/form-data">
 	<label>Nombre de la Mascota</label><input type="text" name="nombre" class="form-control" required="">
      <label>Tipo</label><select  name="tipo" class="form-control" required="">
            <option>Tipo de Mascota</option>
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
        </select>
      <label>Edad de la Mascota</label><input type="text" name="edad" class="form-control" required="">
      <label>Raza de la Mascota</label><input type="text" name="raza" class="form-control" required="">
        <label>Foto de la Mascota</label><input type="file" name="imagen" accept="image/png,image/jpeg,image/jpg" id="quitar" required=""></label>
        <label>Tamaño </label><select name="tamaño" class="form-control" required="">
            <option>Tamaño de la Mascota</option>
            <option value="Grande">Grande</option>
            <option value="Mediano">Mediano</option>
            <option value="Pequeño">Pequeño</option>
        </select>
         <label>Genero</label><select  name="genero" class="form-control" required="">
            <option>Genero de la Mascota</option>
            <option value="Macho">Macho</option>
            <option value="Hembra">Hembra</option>
        </select>
        <label>Color de la Mascota</label><input type="text" name="color" class="form-control" required="">
    
        <?php
        echo'
        <input type="hidden" name="cedula" value="'.$Ced[0].'">
        ';
        ?>
        <input type="submit" name="consulta" value="Insertar Nueva Mascota" class="btn btn-primary">
    </form>
</div>
</div>
    <?php
  }
if(isset($_POST['consulta']))
{
	echo "<script type='text/javascript'>;
	swal('".$resulta."');
	</script>";
}

    ?>
</div>
</div>
</body>
</html>