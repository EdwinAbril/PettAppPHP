<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Denuncias</title>
    </head>
    <body>

        <form action="../Vista/Vista_Denuncias.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
        </form>

    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Denuncias</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Denuncias.php");
	while($Com=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Denuncias.php' method='Post'>
	<input type='hidden' name='usu' value='".$Com[0]."'>   
    <p>Fecha</p><input type='text' name='fec'  value='".$Com[1]."'><BR></BR>
    <p>Descripcion</p><input type='text' name='des'  value='".$Com[2]."'><BR></BR>
    <p>Cedula</p><input type='text' name='ced'  value='".$Com[3]."'><BR></BR>
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