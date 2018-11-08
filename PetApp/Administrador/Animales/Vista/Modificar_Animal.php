<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="Estilomod.css">
        <title>Animal</title>
    </head>
    <body id="fondox">

        <form action="../Vista/Vista_Animal.php">
        <input type="submit" name="volver" value="Volver"  class="btn btn-outline-light" id="vol">
        </form>
         <div id="padre">
        <div id="modificar" class="form-group">

    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Animal</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Animal.php");
	while($Ani=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Animal.php' method='Post'>
	<input type='hidden' name='usu' value='".$Ani[0]."'>   
    <p>Nombre</p><input type='text' name='nombre' value='".$Ani[1]."'>
    <p>Tipo</p><input type='text' name='tipo'  value='".$Ani[2]."'>
    <p>Edad</p><input type='text' name='edad'  value='".$Ani[3]."'>
    <p>Raza</p><input type='text' name='raza'  value='".$Ani[4]."'>

    <p>Tamaño</p><input type='text' name='tama'  value='".$Ani[6]."'>
    <p>Genero</p><input type='text' name='gene'  value='".$Ani[7]."'>
    <p>Color</p><input type='text' name='colo'  value='".$Ani[8]."'>
    
    <input type='submit' name='botonfunci' value='Modificar' class='btn btn-primary'>
    </form>";
	}
	
	if(isset($_POST['botonfunci'])){
		echo"<script type='text/javascript'>;
		alert('".$result."');
		</script>";

	}

	?>
</div>
</div>
        
    </body>
</html>