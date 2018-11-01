<?php
require_once("../Controlador/Controlador_insertar.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Usuario del Administrador</title>
</head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Estilo.css">

<body id="fondox">
=======
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>
>>>>>>> 13d25873c75502ed86527537d952da97665f32d5
    <form action="../Vista/Vista_Administrador.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
<div id="padre">
	<div id="insertar" class="form-group">
	<h1>Insertar Administrador</h1>
 <form action="../Controlador/Controlador_insertar.php" method="Post" required="" >
 	<label>Nombre de Usuario </label><input type="text" name="nombre" required="" class="form-control">
    <label>Clave</label><input type="password" name="clave" required="" class="form-control">
      <div class="form-group" id="bot">
      <input type="submit" name="consulta" value="Insertar Nuevo Usuario" class="btn btn-primary">
      </div>
    </form>
</div>
</div>
<<<<<<< HEAD
=======
</center>

>>>>>>> 13d25873c75502ed86527537d952da97665f32d5
    <?php

if(isset($_POST['consulta']))
{
echo "<script type='text/javascript'>;
	swal('".$result."', '', 'success');
	</script>";
	
}

    ?>

</body>
</html>