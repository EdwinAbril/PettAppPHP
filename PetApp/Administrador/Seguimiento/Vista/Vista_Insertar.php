<?php
require_once("../Controlador/Controlador_Insertar.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Seguimiento</title>
</head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
<body>
	<div class="insertar">
	<h1>Insertar Seguimiento</h1>
 <form action="../Controlador/Controlador_Insertar.php" method="Post">
 	<p><label>Codigo de la Postulacion </label></p><input type="number" name="codigo">
    	<input type="submit" name="consulta" value="Insertar Nuevo Seguimiento">
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