<?php
require_once("../Controlador/Controlador_Veterinaria.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Veterinaria</title>
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
</head>

<body>
		    <form action="../Vista/Vista_Veterinaria.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
<center>
	<div id="insertar">
	<h1>Insertar Veterinaria</h1>
 <form action="../Controlador/Controlador_Veterinaria.php" method="Post">
 	<p><label>Nit </label></p><input type="text" name="nit" required="">
    	<p><label>Telefono</label></p><input type="number" name="telefono" required="">
    	<p><label>Nombre</label></p><input type="text" name="nombre" required="">
    	<p><label>Direccion</label></p><input type="text" name="direccion" required="">
    	<p><label>Clave</label></p><input type="password" name="clave" required="">
           </br>
    </br>
    	<input type="submit" name="consulta" value="Insertar Nueva Veterinaria" class="btn btn-primary">
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