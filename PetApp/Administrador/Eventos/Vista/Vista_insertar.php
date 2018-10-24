<?php
require_once("../Controlador/Controlador_insertar.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Evento</title>
</head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
<body>
	<div class="insertar">
	<h1>Insertar Evento</h1>
 <form action="../Controlador/Controlador_insertar.php" method="Post">
 	<p><label>Fecha del evento </label></p><input type="date" name="fecha">
    	<p><label>Lugar del evento</label></p><input type="text" name="lugar">
    	<p><label>Duracion del evento</label></p><input type="time" name="duracion">
      <p><label>Descripcion</label></p><input type="text" name="desc">
    	<input type="submit" name="consulta" value="Insertar Nuevo Evento">
    </form>
</div>
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