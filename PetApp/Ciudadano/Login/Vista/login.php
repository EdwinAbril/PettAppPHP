<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  user-scalabe=no, initial-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="Estilo.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-white.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="main.js"></script>
  	<script src="js/jquery-3.3.1.min.js" ></script>
  	<script src="js/main.js"></script>


	<title>Pet App</title>
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
        <div class="container-fluid" 
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark fixed-top" id="navegacion1">
               
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="../../Login/Vista/login.php">PetApp</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav ml-md-auto">
                            <a class="navbar-brand" href="">Usuario: <?php echo "".$usuar.""?></a>
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
                        <a class="dropdown-item" href="../../Ciudadano/Vista/Vista_Ciudadano.php">Perfil</a> <a class="dropdown-item" href="../../Notificaciones/Vista/Vista_Notificaciones.php">Respuestas</a> <a class="dropdown-item" href="../../Menu/Vista/Ciudadano.php">Menu</a>
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

<header>	
		<div class="logotipo">
		<h1>Pet App </h1>
		</div>
		<div class="navegacion">
			<div class="boton-menu">
	<a href="#" ><span class="icon-menu3"></span> </a>
		</div>
		<nav >
			<ul class="menu">
		<li><a href="#">Incio</a></li>
		<li><a href="#">Adopta</a></li>
		<li><a href="Galeria.php">Galeria</a></li>
		<li><a href="#">Contacto</a></li>
</ul>
	</nav>
</div>

</header>

	<div class="slider">
		<ul>
			<s><img src="img/banner.jpeg" alt="" ></s>
			<s><img src="img/banner2.jpg" alt=""></s>
			<s><img src="img/banner3.jpg" alt=""></s>
			<s><img src="img/banner4.jpeg" alt=""></s>
		</ul>
	</div>

	<br>
	<br>

  <div class="row" id="modulos">

  <div class="col-sm" id="caja1" >
    <div class="panel panel-default text-center">
        <div class="panel-heading" id="panel">
        	<img src="Imagenes/info.png" height="30" width="30" id="info" > 
          <h1 id="Adopcion">Adopción</h1>
            <h5>Cómo Adopto?</h5>
            </div>
            <div id="caja2">
            	<br>
            	<p>En este módulo usted podrá dar hogar a un animal que lo necesita, La alcaldía municipal de Mosquera Cundinamarca, le ofrece la posibilidad de escoger el animal que usted quiera adoptar, y así contribuir de manera responsable a la salud ambiental y el desarrollo del municipio </p><br><br>
            	<a href="Informacion/Adoptar.php">saber más</a>

            </div>
          <div class="panel-body" id="imagen">
          <!--  AQUI VA LA IMAGEN DEL EVENTO -->
        <img src="Imagenes/adopcion.jpeg" class="img-responsive slideanim" id="imagenadopcion">
     </div>
    </div>      
  </div>  
      
    <div class="col-sm" id="caja3">
      <div class="panel panel-default text-center">
          <div class="panel-heading" id="panel">
          	<img src="Imagenes/info.png" height="30" width="30" id="info2" >
          <h1 id="Veterinaria">Veterinarias</h1>
           <h5>Veterinarias Vinculadas</h5>
        </div>
        <div id="caja4">
        	<br>
            	<p>En este módulo usted podrá ubicar las diferentes veterinarias del municipio que contribuyen al cuidado animal y a las cuales usted podrá acudir en caso de que su mascota requiera atención</p><br><br>
            	<a href="Informacion/Eventos.php">saber más</a>
        </div>
        <div class="panel-body" id="imagen2">
          <img src="Imagenes/veterinaria.jpeg" class="img-responsive slideanim" id="imagenveterinaria">
        </div>
      </div>      
    </div>     

    <div class="col-sm" id="caja5">
      <div class="panel panel-default text-center">
          <div class="panel-heading" id="panel">
          	<img src="Imagenes/info.png" height="30" width="30" id="info3" >
          <h1 id="Eventos">Eventos</h1>
           <h5>Infórmate</h5>
        </div>
        <div id="caja6">
           <br>
            	<p>En este módulo usted podrá informarse acerca de las jornadas de cuidado animal que realiza el municipio, aquí podrá observar una descripción detallada además de la fecha, la hora y el lugar en el que se realizara</p><br><br>
            	<a href="Informacion/Veterinaria.php">saber más</a>
        </div>
        <div class="panel-body" id="imagen3">
          <img src="Imagenes/Jornadas.jpeg" class="img-responsive slideanim" id="imageneventos">
        </div>
      </div>      
    </div>    
  </div>


    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="#">Alcaldia de Mosquera</a></li>
                <li><a href="#">Contactenos</a></li>
                <li><a href="#">Terminos de servicio</a></li>
            </ul>
        <p class="footer-copyright">© 2019 Copyright</p>
        </div>
        <div class="footer-social">
            <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-icons"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
        </div>
</footer>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>

</body>
</html>