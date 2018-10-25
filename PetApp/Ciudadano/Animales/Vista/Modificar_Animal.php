<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Animal</title>
    </head>
    <body>
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
    <p>Nombre</p><input type='text' name='nombre' value='".$Ani[1]."'><BR>
    <p>Tipo</p><input type='text' name='tipo'  value='".$Ani[2]."'><BR>
    <p>Edad</p><input type='text' name='edad'  value='".$Ani[3]."'><BR>
    <p>Raza</p><input type='text' name='raza'  value='".$Ani[4]."'><BR><BR>
    
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