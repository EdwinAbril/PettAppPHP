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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">

<body>
    <form action="../Vista/Vista_Administrador.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
  <center>
	<div id="insertar">
	<h1>Insertar Usuario del Administrador</h1>
 <form action="../Controlador/Controlador_insertar.php" method="Post" required="">
 	<p><label>Nombre de Usuario </label></p><input type="text" name="nombre" required="">
    	<p><label>Clave</label></p><input type="password" name="clave" required="">
         </br>
    </br>
    	<input type="submit" name="consulta" value="Insertar Nuevo Usuario" class="btn btn-primary">
    </form>
</div>
</center>
    <?php
if(isset($_POST['consulta']))
{
echo "<script type='text/javascript'>;
	alert('".$result."');
	</script>";
	
}

    ?>

</body>
</html>