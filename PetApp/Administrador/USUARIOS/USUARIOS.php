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
   <form action="../Menu/Vista/Administrador.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="nuevo">
</form>
		<h1>Creacion De Usuarios</h1>
		<img src="Imagenes/Admin2.png" id="Avatar" >
	</header>

  

  <center>
	<div id="pricing" class="container-fluid">
  <div class="text-center">

    <br><h2>Creacion De Usuarios</h2><br><br>
    <br>
  </div>
   

  <form action="../Usuario/Vista/Vista_Usuario.php">
<div class="col-sm-4 col-xs-12" >
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="diciu">
          <h1>Ciudadanos</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Eventos" src="logos/Ciudadano.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div> 
  </form>

  <form action="../UsuarioFuncionario/Vista/Vista_Usuario.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="diciu">
          <h1>Funcionarios</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Eventos" src="logos/Ciudadano.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div> 
  </form>
    
    <form action="../UsuarioVeterinaria/Vista/Vista_Usuario.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divanimal">
        <div class="panel-heading" id="diciu">
          <h1>Veterinarias</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Animales" src="logos/Ciudadano.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div>
  </form>
</div>
  </center>
  
</div>

</body>
</html>