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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
    <form action="../Controlador/Controlador_Ciudadano.php" method="Post" enctype="multipart/form-data">
 	    <label>Nombre de Usuario</label><input type="text" name="usuario" class="form-control">
        <label>Clave</label><input type="password" name="clave" class="form-control">
        <label>Cedula</label><input type="number" name="cedula" class="form-control">
    	<label>Nombre</label><input type="text" name="nombre" class="form-control">
    	<label>Telefono</label><input type="number" name="telefono" class="form-control">
    	<label>Direccion</label><input type="text" name="direccion" class="form-control">
    	<label>Correo Electronico</label><input type="text" name="correo" class="form-control">
        <label>Foto de Perfil</label><div id="padre"><input type="file" name="imagen" accept="image/png,image/jpeg,image/jpg" id="quitar"></div>
    	<div class="form-group" id="bot">
    	<input type="submit" name="consulta" value="Insertar Nuevo Ciudadano"  class="btn btn-primary">
        </div>
    </form>
    </div>
    </div>
    <?php
    
    if(isset($_POST['consulta'])){
    echo "<script type='text/javascript'>;
    swal('".$result."');
    </script>";
    
    }

    ?>

</body>
</html>