<!DOCTYPE html>
<html>
<head>
	<title>Insertar Animal</title>
        <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
        <form action="Vista_Animal.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
	<h1>Insertar Animal</h1>
 <form action="../Controlador/Controlador_Animal.php"" method="Post"  enctype="multipart/form-data">
 	<p><label>Nombre del Animal</label></p><input type="text" name="nombre">
    	<p><label>Tipo de Animal</label></p><input type="text" name="tipo">
    	<p><label>Edad del Animal</label></p><input type="text" name="edad">
    	<p><label>Raza del Animal</label></p><input type="text" name="raza">
    	<p><label>Foto del Animal</label></p><input type="file" name="imagen" accept="image/png,image/jpeg,image/jpg"></label>
    	<input type="submit" name="consulta" value="Insertar Nuevo Animal">
    </form>
    <?php
if(isset($_POST['consulta']))
{
	echo "<script type='text/javascript'>;
	alert('".$resulta."');
	</script>";
}

    ?>
</body>
</html>