<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Pet App</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="Imagenes/fonts/style.css" >
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="main.js"></script>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		<li><a href="galeria.php">Galeria</a></li>
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

     
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
          <div class="panel-heading" id="panel">
          <h1>Adopcion</h1>
           <h5>Como Adopto?</h5>
        </div>
        <div class="panel-body">
          <!--  AQUI VA LA IMAGEN DEL EVENTO -->
          <img src="Imagenes/adopcion.jpeg" class="img-responsive slideanim" >
        </div>
      </div>      
    </div>  
      
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
          <div class="panel-heading" id="panel">
          <h1>Veterinarias</h1>
           <h5>Veterinarias Vinculadas</h5>
         
        </div>
        <div class="panel-body">
          <img src="Imagenes/veterinaria.jpeg" class="img-responsive slideanim">
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
          <div class="panel-heading" id="panel">
          <h1>Eventos</h1>
           <h5>Informate</h5>
        </div>
        <div class="panel-body">
          <img src="Imagenes/eventos.jpeg" class="img-responsive slideanim">
        </div>
      </div>      
    </div>    
  </div>


</body>
</html>