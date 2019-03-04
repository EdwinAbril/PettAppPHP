<!DOCTYPE html>
<html>
<head>
	<title>Insertar Mascota</title>
        <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../Bst/4.1.3/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../Bst/4.1.3/CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../../Bst/4.1.3/CSS/style.css" rel="stylesheet">
 <script src="../../Bst/3.3.7/js/jquery.min.js"></script>
    <script src="../../Bst/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../Bst/3.3.7/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
        <form action="../Vista/Vista_Mascotas.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
<center>
<div id="insertar" >
	<h1>Insertar Mascota</h1>
 <form action="../Controlador/Controlador_Insertar.php"" method="Post"  enctype="multipart/form-data">
 	<p><label>Nombre de la Mascota</label></p><input type="text" name="nombre" class="form-control" required="">
    	<p><label>Descendencia</label></p><input type="text" name="des" class="form-control" required="">
    	<p><label>Estado de la Mascota</label></p><input type="text" name="estado" class="form-control" required="">
    	<p><label>Tipo de la Mascota</label></p><input type="text" name="tipo" class="form-control" required="">
        <p><label>Edad de la Mascota</label></p><input type="number" name="edad" class="form-control" required="">
        <p><label>Raza de la Mascota</label></p><input type="text" name="raza" class="form-control" required="">
        <p><label>Cedula del Dueño</label></p><input type="number" name="cedula" class="form-control" required="">
    	<p><label>Foto de la Mascota</label></p><center><input type="file" name="imagen" accept="image/png,image/jpeg,image/jpg" id="quitar" required=""></center></label>
    </br>
    </br>
    	<input type="submit" name="consulta" value="Insertar Nueva Mascota" class="btn btn-primary">
    </form>
</div>
</center>
    <?php
if(isset($_POST['consulta']))
{
	echo "<script type='text/javascript'>;
	swal('".$resulta."', '', 'success');
	</script>";
}

    ?>
</body>
</html>