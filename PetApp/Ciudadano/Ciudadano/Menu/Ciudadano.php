<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
	<title>PetApp</title>
  <script type="text/javascript">history.forward();</script>
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
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="text" /> 
              <button class="btn btn-primary my-2 my-sm-0" type="submit">
                Buscar
              </button>
            </form>
            <ul class="navbar-nav ml-md-auto">
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><input type="image" src="Imagenes/perros.jpg" height="40" width="40"></a>
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
  <header id="encabezado">
    <form action="../../../Cerrar.php">
    <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
    </form>
		<h1>Ciudadano</h1>
		<img src="Logos/Mujer.png" height="300" width="300" id="Avatar" >


                <form action="../../Eventos/Vista/Vista_Eventos.php">
                    <input type="image" name="eventis" src="logos/eventis.png" height="100" width="100" id="eventos">
                </form>

                <form action="../../Animales/Vista/Vista_Animal.php">
                    <input type="image" name="eventis" src="logos/Adoptar.png" height="100" width="100" id="animales">
                </form>

                <form action="../../Denuncias/Vista/Vista_Denuncias.php">
                    <input type="image" name="eventis" src="logos/Denuncia.png" height="100" width="100" id="denuncia">
                </form>

                <form action="../../Mascotas/Vista/Vista_Mascotas.php">
                    <input type="image" name="eventis" src="logos/Mascota.png" height="100" width="100" id="mascota">
                </form>

                <form action="../Vista/Vista_Ciudadano.php">
                    <input type="image" name="eventis" src="logos/MisDatos.png" height="100" width="100" id="datos">
                </form>


	</header>

  

</body>
</html>
