<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
  <script src="../../../Bst/4.3.1/js/jquery.min.js"></script>
  <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
  <link href="../../../Bst/3.3.7/CSS/bootstrap.css" rel="stylesheet">
  <link href="../../../Bst/3.3.7/CSS/bootstrap.min.css" rel="stylesheet">
  <script src="../../../Bst/3.3.7/js/jquery.min.js"></script>
  <script src="../../../Bst/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
	<title>PetApp</title>
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
    }
  ?>

	<header id="encabezado">
    <form action="../../../Login/Vista/registro.php">
    <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
    </form>
    
    <?php
    require_once("../Controlador/Controlador_Administrador.php");
    while($Adm=mysqli_fetch_row($resultado)){
    ?>

		<h1>Funcionario</h1>
		<?php
      echo "
      <p><img src='../../../Uploads/Usuarios_Fotos/".$Adm[3]."' class='fotomod' style='width:250px; height:250px; border-radius: 200px 200px;'></p>";}?>
    <p>
    <form action="../../Perfil/Vista/Vista_Funcionario.php">
    <input type="submit" value="Perfil" class="btn btn-dark" id='tam'>
    </form>
    </p>
  </header>

  

  <center>
	<div id="pricing" class="container-fluid">
  <div class="text-center">

    <br><h2>GESTIONAR</h2><br><br>
    <br>
  </div>
   

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

<form action="../../Postulacion/Vista/Vista_Postulacion.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano">
        <div class="panel-heading" id="verde">
          <h1>Postulacion</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Eventos" src="logos/Postulacion.png" class="img-responsive slideanim" id="logoimagen"></center>
        </div>
      </div>      
    </div>
    </form>  

<form action="../../Seguimiento/Vista/Vista_Seguimiento.php">
<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center" id="divciudadano"> 
        <div class="panel-heading" id="verde">
          <h1>Seguimiento</h1>
        </div>
        <div class="panel-body"><center>
          <input type="image" name="Eventos" src="logos/Seguimiento.png" class="img-responsive slideanim" id="logoimagen"></center>
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