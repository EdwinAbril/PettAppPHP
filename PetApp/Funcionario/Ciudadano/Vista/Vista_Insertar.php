<?php
require_once("../Controlador/Controlador_Ciudadano.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Ciudadano</title>
	       <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/style.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/jquery-3.3.1.min.js"></script>
    <script src="../../../Bst/4.3.1/js/jquery.min.js"></script>
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
	
<body id="fondox">
	    <form action="../Vista/Vista_Ciudadano.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
</form>
<div id="padre">
    <div id="insertar" class="form-group">

	<h1>Insertar Ciudadano</h1>
    <form action="" method="Post">
 	    <label>Cedula</label><input type="number" name="cedula" class="form-control">
    	<label>Nombre</label><input type="text" name="nombre" class="form-control">
    	<label>Telefono</label><input type="number" name="telefono" class="form-control">
    	<label>Direccion</label><input type="text" name="direccion" class="form-control">
    	<label>Correo Electronico</label><input type="text" name="correo" class="form-control">
    	<label>Nombre de Usuario</label><input type="text" name="usuario" class="form-control">
        <div class="form-group" id="bot">
    	<input type="submit" name="consulta" value="Insertar Nuevo Ciudadano"  class="btn btn-primary">
        </div>
    </form>
</div>
</div>
</center>
    <?php
if(isset($_POST['consulta']))
{
	$ced=$_POST['cedula'];
	$nom=$_POST['nombre'];
	$tel=$_POST['telefono'];
	$dir=$_POST['direccion'];
	$cor=$_POST['correo'];
	$us=$_POST['usuario'];
	$mensaje=$mostrar->InsertarCiudadano($ced,$nom,$tel,$dir,$cor,$us);
	echo "<script type='text/javascript'>;
	swal('".$mensaje."', '', 'success');
	</script>";
}

    ?>

</body>
</html>