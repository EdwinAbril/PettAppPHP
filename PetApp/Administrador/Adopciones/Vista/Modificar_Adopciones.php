<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Adopcion</title>
    </head>
    <body>

    	<form action="../Vista/Vista_Adopciones.php">
    	<input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
    	</form>

    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Adopcion</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Adopciones.php");
	while($Ado=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Adopciones.php' method='Post'>
	<input type='hidden' name='usu' value='".$Ado[0]."'>   
	<p>Animal</p><input type='text' name='animal' value='".$Ado[1]."'><BR>
    <p>Seguimiento</p><input type='text' name='seguimiento'  value='".$Ado[2]."'><BR>
    <p>Mensaje</p><input type='text' name='mensaje'  value='".$Ado[3]."'><BR>

    <input type='submit' name='botonfunci' value='Modificar'>
    </form>";
	}
	
	if(isset($_POST['botonfunci'])){
		echo"<script type='text/javascript'>;
		alert('".$result."');
		</script>";

	}

	?>
        
    </body>
</html>