<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="Estilomod.css">
        <title>Ciudadano</title>
    </head>
    <body id="fondox">

        <form action="../Vista/Vista_Ciudadano.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
        </form>
         <div id="padre">
        <div id="modificar" class="form-group">

    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Ciudadano</h1>

        <p>Cedula</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Ciudadano.php");
	while($Ciu=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Ciudadano.php' method='Post'>
	<input type='hidden' name='usu' value='".$Ciu[0]."'>   
    <p>Nombre</p><input type='text' name='nom'  value='".$Ciu[1]."'><BR></BR>
    <p>Telefono</p><input type='text' name='tel'  value='".$Ciu[2]."'><BR></BR>
    <p>Direccion</p><input type='text' name='dir'  value='".$Ciu[3]."'><BR></BR>
    <p>Correo</p><input type='text' name='cor'  value='".$Ciu[4]."'><BR></BR>
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