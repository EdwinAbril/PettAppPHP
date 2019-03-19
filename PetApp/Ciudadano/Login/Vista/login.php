<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  user-scalabe=no, initial-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="assets/css/Footer-white.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="Estilos.css">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
  <link href="../../../Bst/4.3.1/CSS/style.css" rel="stylesheet">
  <script src="../../../Bst/4.3.1/js/jquery.min.js"></script>
  <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
  <script src="../../../Bst/4.3.1/js/scripts.js"></script>
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
<div class="row" id="alt">
<?php
require_once("../../Eventos/Controlador/Controlador_Consultar.php");
while($Eve=mysqli_fetch_row($resultado)){

echo'

        
    <div class="row" id="modulos">

        <div class="col" class="caja1" >
            <div class="panel panel-default text-center">
              	<div class="panel-heading" id="panel">
              	<img src="Imagenes/info.png" height="30" width="30" class="info">
              	<h1 id="Adopcion">'.$Eve[1].'</h1>
                    <h5>'.$Eve[2].'</h5>
              	</div>

            	<div class="caja2">
	              <br>
	                <p>Fecha:  '.$Eve[1].'</p>
	                <p>Lugar:  '.$Eve[2].'</p>
	                <p>Hora:  '.$Eve[3].'</p>
	                <p>Descripcion:  '.$Eve[4].'</p>
	              <br><br><br>
            	</div>

	            <div class="panel-body">
	            <div class="img">
	              <img src="../../../Uploads/Eventos_fotos/'.$Eve[5].'" class="img-responsive slideanim" id="imageneve" >
	            </div>
	            </div>

        	</div>
    	</div>

    </div>



          ';}      
  
 
?>

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