<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="Estilomod.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Usuario Veterinaria</title>
    </head>
    <body id="fondox">
    

    <form action="../Vista/Vista_Usuario.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="modificar" class="form-group">
        	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Usuario Veterinaria</h1>

        <p>Usuario</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Usuario.php");
	while($Usu=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Usuario.php' method='Post'>
	<input type='hidden' name='usu' value='".$Usu[0]."'>   
    <p>Clave</p><input type='text' name='clave'  value='".$Usu[1]."'>
    <input type='submit' name='botonfunci' value='Modificar' class='btn btn-primary'>
    </form>";
	}
	
	if(isset($_POST['botonfunci'])){
		echo"<script type='text/javascript'>;
		swal('".$result."');
		</script>";

	}

	?>
    </div>
    </div>
    </body>
</html>