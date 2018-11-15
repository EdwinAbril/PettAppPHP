<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  user-scalabe=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Pet App</title>
	<link rel="stylesheet" href="Estilo.css">
	<link rel="stylesheet" href="Imagenes/fonts/style.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-white.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="main.js"></script>
  	<script src="js/jquery-3.3.1.min.js" ></script>
  	<script src="js/main.js" ></script>

</head>
<body>

<header >	
		<div class="logotipo">
		<h1>Pet App</h1>
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
		<li><a href="registro.php">Login</a></li>
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

  <div class="row slideanim" id="modulos">

  <div class="col-sm-4 col-xs-12" id="caja1" >
    <div class="panel panel-default text-center">
        <div class="panel-heading" id="panel">
        	<img src="Imagenes/info.png" height="30" width="30" id="info" > 
          <h1>Adopción</h1>
            <h5>Cómo Adopto?</h5>
            </div>
            <div id="caja2">
            	<br>
            	<p>En este módulo usted podrá dar hogar a un animal que lo necesita, La alcaldía municipal de Mosquera Cundinamarca, le ofrece la posibilidad de escoger el animal que usted quiera adoptar, y así contribuir de manera responsable a la salud ambiental y el desarrollo del municipio </p><br><br>
            	<a href="Informacion/Adoptar.php">saber más</a>

            </div>
          <div class="panel-body" id="imagen">
          <!--  AQUI VA LA IMAGEN DEL EVENTO -->
        <img src="Imagenes/adopcion.jpeg" class="img-responsive slideanim" >
     </div>
    </div>      
  </div>  
      
    <div class="col-sm-4 col-xs-12" id="caja3">
      <div class="panel panel-default text-center">
          <div class="panel-heading" id="panel">
          	<img src="Imagenes/info.png" height="30" width="30" id="info2" >
          <h1>Veterinarias</h1>
           <h5>Veterinarias Vinculadas</h5>
        </div>
        <div id="caja4">
        	<br>
            	<p>En este módulo usted podrá ubicar las diferentes veterinarias del municipio que contribuyen al cuidado animal y a las cuales usted podrá acudir en caso de que su mascota requiera atención</p><br><br>
            	<a>saber más</a>
        </div>
        <div class="panel-body" id="imagen2">
          <img src="Imagenes/veterinaria.jpeg" class="img-responsive slideanim">
        </div>
      </div>      
    </div>     

    <div class="col-sm-4 col-xs-12" id="caja5">
      <div class="panel panel-default text-center">
          <div class="panel-heading" id="panel">
          	<img src="Imagenes/info.png" height="30" width="30" id="info3" >
          <h1>Eventos</h1>
           <h5>Infórmate</h5>
        </div>
        <div id="caja6">
           <br>
            	<p>En este módulo usted podrá informarse acerca de las jornadas de cuidado animal que realiza el municipio, aquí podrá observar una descripción detallada además de la fecha, la hora y el lugar en el que se realizara</p><br><br>
            	<a>saber más</a>
        </div>
        <div class="panel-body" id="imagen3">
          <img src="Imagenes/Jornadas.jpeg" class="img-responsive slideanim">
        </div>
      </div>      
    </div>    
  </div>


    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="#">Alcaldia de Mosquera</a></li>
                <li><a href="#">Contactenos</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Terms of service</a></li>
            </ul>
        <p class="footer-copyright">© 2018 Copyright</p>
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