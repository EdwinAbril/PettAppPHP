<?php
require_once("../Controlador/Controlador_insertar.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Evento</title>

	  <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<body>
    <form action="../Vista/Vista_Eventos.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
<center>
	<div id="insertar" >
	<h1>Insertar Evento</h1>
 <form action="../Controlador/Controlador_insertar.php" method="Post">
 	<p><label>Fecha del evento </label></p><input type="date" name="fecha" required="">
    	<p><label>Lugar del evento</label></p><input type="text" name="lugar" required="">
    	<p><label>Duracion del evento</label></p><input type="text" name="duracion" required="">
      <p><label>Descripcion</label></p><input type="text" name="desc" required="">
          </br>
    </br>
    	<input type="submit" name="consulta" value="Insertar Nuevo Evento" class="btn btn-primary">
    </form>
</div>
</center>
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