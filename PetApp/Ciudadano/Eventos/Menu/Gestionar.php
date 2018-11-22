<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
	<title>PetApp</title>
</head>
<body>
	<header id="encabezado">
		<h1>Administrador</h1>
		<img src="Imagenes/Admin2.png" id="Avatar" >
	</header>
  <center>
	<div id="pricing" class="container-fluid" >
  <div class="text-center">
    <h1>Gestionar Eventos</h1>
    <img src="logos/Eventos.png" id="Avatar"><BR><BR><BR><BR>
  </div> 
  <div class="row ">
    <div class="col-sm-3 col-xs-12" >
      <div class="panel panel-default text-center" id="divinsert">
        <div class="panel-heading">
          <h1>Insertar</h1>
        </div>
        <div class="panel-body"><center>
          <!--  AQUI VA LA IMAGEN DEL EVENTO -->
          <input type="image" name="Funcionario" src="logos/Insertar.png" class="img-responsive slideanim"  id="logoinsertar"></center>
        </div>
      </div>      
    </div>
    <form action="../Vista/Vista_Eventos.php">     
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center"  id="divconsulta">
        <div class="panel-heading">
          <h1>Consultar</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Veterinaria" src="logos/Consultar.png"  class="img-responsive slideanim"  id="logoconsultar"></center>
        </div>
      </div>      
    </div>
  </form>       
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center"  id="divactuali">
        <div class="panel-heading">
          <h1>Actualizar</h1>
        </div> 
        <div class="panel-body"><center>
          <input type="image" name="Mascotas" src="logos/Actualizar.png" class="img-responsive slideanim"  id="logoactualizar"></center>
        </div>
      </div>      
    </div>
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center"  id="diveli">
        <div class="panel-heading">
          <h1>Eliminar</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Mascotas" src="logos/Eliminar.png" class="img-responsive slideanim"></center>
        </div>
      </div>      
    </div>

  </center>
   
</body>
</html>