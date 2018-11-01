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
<body id="fondox">
        <form action="../Vista/Vista_Animal.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
</form>
<center>
<div id="padre">
    <div id="insertar" class="form-group">
	<h1>Insertar Animal</h1>
 <form action="../Controlador/Controlador_Animal.php"" method="Post"  enctype="multipart/form-data">
 	<label>Nombre del Animal</label><input type="text" name="nombre" class="form-control" required="">
    	<label>Tipo de Animal</label><input type="text" name="tipo" class="form-control" required="">
    	<label>Edad del Animal</label><input type="text" name="edad" class="form-control" required="">
    	<label>Raza del Animal</label><input type="text" name="raza" class="form-control" required="">
        <label>Tamaño del Animal</label><input type="text" name="tamaño" class="form-control" required="">
        <label>Genero</label><input type="text" name="genero" class="form-control" required="">
        <label>Color del Animal</label><input type="text" name="color" class="form-control" required="">
    	<label>Foto del Animal</label><center><input type="file" name="imagen" accept="image/png,image/jpeg,image/jpg" id="quitar" required=""></center></label>
        <div class="form-group" id="bot">
    	<input type="submit" name="consulta" value="Insertar Nuevo Animal" class="btn btn-primary">
        </div>
    </form>
</div>
</div>
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