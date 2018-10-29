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
    <form action="../../../Login/Vista/registro.php">
    <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
    </form>
		<h1>Ciudadano</h1>
		<img src="Logos/Avatar.png" id="Avatar" >
	</header>

  <center>  
	<div id="pricing" class="container-fluid">
  <div class="text-center">

    <br><h2>GESTIONAR</h2><br><br>
    <br>
  </div>

     <form action="../Vista/Vista_Ciudadano.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading">
          <h1>Mis Datos</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Eventos" src="logos/Postulacion.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div> 
  </form>

  <form action="../../Animales/Vista/Vista_Animal.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divadoptar">
        <div class="panel-heading">
          <h1>Adoptar</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Eventos" src="logos/Adopcion.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div> 
  </form>
</div>

</center>

</body>
</html>