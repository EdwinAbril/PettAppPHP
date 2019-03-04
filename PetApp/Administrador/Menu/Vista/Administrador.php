<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
          location="../../../Login/Vista/login.php";
          </script>';  
  }
  else{
    $usuar=$_SESSION["Usuario"];
    echo "<h1> Bienvenido: ".$usuar."</h1>";
    }
  ?>
  
  <header id="encabezado">
    <form action="../../../Cerrar.php">
    <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
    </form>
    <?php
    require_once("../Controlador/Controlador_Administrador.php");
    while($Adm=mysqli_fetch_row($resultado)){
    ?>
		<h1>Administrador</h1>
    <?php
          echo "
		      <img src='../../../Uploads/Usuarios_Fotos/".$Adm[3]."' class='fotomod' style='width:250px; height:250px; border-radius: 200px 200px;'>";}?>
	</header>

  

  <center>
	<div id="pricing" class="container-fluid">
  <div class="text-center">

    <h2>GESTIONAR</h2>
  </div>
   

  <form action="../../Administrador/Vista/Vista_Administrador.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="verde">
          <h1>Administrador</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Eventos" src="logos/Admin.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div> 
  </form>

  <form action="../../Adopciones/Vista/Vista_Adopciones.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="verde">
          <h1>Adopciones</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Eventos" src="logos/Adopcion.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div> 
  </form>
    
    <form action="../../Animales/Vista/Vista_Animal.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="verde">
          <h1>Animales</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Animales" src="logos/Animales.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div>
  </form>

<form action="../../Ciudadano/Vista/Vista_Ciudadano.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="verde">
          <h1>Ciudadano</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Eventos" src="logos/Ciudadano.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div> 
  </form>


<form action="../../Denuncias/Vista/Vista_Denuncias.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="verde">
          <h1>Denuncias</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Denuncias" src="logos/Denuncias.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div>
  </form>

<form action="../../Eventos/Vista/Vista_Eventos.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="verde">
          <h1>Eventos</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Eventos" src="logos/Eventos.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div> 
  </form>

    <form action="../../Funcionario/Vista/Vista_Funcionario.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="verde">
          <h1>Funcionario</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Adopcion" src="logos/Funcionario.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div>
  </form>


<form action="../../USUARIOS/USUARIOS.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="verde">
          <h1>Usuarios</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Veterinaria" src="logos/Usuario.png"  class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div>
  </form>

<form action="../../Veterinaria/Vista/Vista_Veterinaria.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="verde">
          <h1>Veterinaria</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Veterinaria" src="logos/Veterinaria.png"  class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div> 
  </form>
  </center>
 
</div>

</body>
</html>