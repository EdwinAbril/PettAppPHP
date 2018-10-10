<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
	<title>PetApp</title>
</head>
<body>
	<header id="encabezado">
		<h1>Administrador</h1>
		<img src="Imagenes/Admin2.png" id="Avatar" >
	</header>
	<div id="pricing" class="container-fluid" style="background: lightgray;">
  <div class="text-center">

    <br><h2>GESTIONAR</h2><br><br>
    <br>
  </div>
  <div class="row ">
    <form action="../../Funcionario/Menu/Gestionar.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Funcionario</h1>
        </div>
        <div class="panel-body">
          <!--  AQUI VA LA IMAGEN DEL EVENTO -->
          <input type="image" name="Funcionario" src="logos/Funcionario.png" class="img-responsive slideanim" width="300" height="225" id="logoimagen">

        </div>
      </div>      
    </div>
    </form>
    <form action="../../Veterinaria/Menu/Gestionar.php">     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Veterinaria</h1>
        </div>
        <div class="panel-body">
          <input type="image" name="Veterinaria" src="logos/Veterinaria.png"  class="img-responsive slideanim" width="300" height="225" id="logoimagen">
        </div>
      </div>      
    </div>
    </form>
    <form action="../../Mascotas/Menu/Gestionar.php">       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Mascotas</h1>
        </div>
        <div class="panel-body">
          <input type="image" name="Mascotas" src="logos/Mascotas.png" class="img-responsive slideanim" width="300" height="225" id="logoimagen">
        </div>
      </div>      
    </div>
  </form>
  <form action="../../Animales/Menu/Gestionar.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Animales</h1>
        </div>
        <div class="panel-body">
          <input type="image" name="Animales" src="logos/Animales.png" class="img-responsive slideanim" width="300" height="225" id="logoimagen">
        </div>
      </div>      
    </div>
  </form>
  <form action="../../Adopciones/Menu/Gestionar.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Adopcion</h1>
        </div>
        <div class="panel-body">
          <input type="image" name="Adopcion" src="logos/Adopcion.png" class="img-responsive slideanim" width="300" height="225" id="logoimagen">
        </div>
      </div>      
    </div>
  </form>
  <form action="../../Comentarios/Menu/Gestionar.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Comentarios</h1>
        </div>
        <div class="panel-body">
          <input type="image" name="Comentarios" src="logos/Comentarios.png" class="img-responsive slideanim" width="300" height="225" id="logoimagen">
        </div>
      </div>      
    </div>
    </form>
    <form action="../../Denuncias/Menu/Gestionar.php">    
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Denuncias</h1>
        </div>
        <div class="panel-body">
          <input type="image" name="Denuncias" src="logos/Denuncias.png" class="img-responsive slideanim" width="300" height="225" id="logoimagen">
        </div>
      </div>      
    </div>
  </form>
  <form action="../../Eventos/Menu/Gestionar.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Eventos</h1>
        </div>
        <div class="panel-body">
          <input type="image" name="Eventos" src="logos/Eventos.png" class="img-responsive slideanim" width="300" height="225" id="logoimagen">
        </div>
      </div>      
    </div>
    </form>   
  </div>
</div>

</body>
</html>