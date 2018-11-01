<!DOCTYPE html>
<html>
<head>
	<title>Adopciones</title>
      <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
        <form action="Vista_Adopciones.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
	<h1>Postulacion</h1>
 <form action="../Controlador/Controlador_Insertar.php"" method="Post"  enctype="multipart/form-data">
 	<p><label>Codigo  del Animal</label></p><input type="number" name="animal">
    	<p><label>Codigo del Seguimiento</label></p><input type="code" name="seguimiento">
    	<p><label>Respuesta</label></p><input type="text" name="respuesta">
    	<input type="submit" name="consulta" value="Enviar Adopcion">
    </form>
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