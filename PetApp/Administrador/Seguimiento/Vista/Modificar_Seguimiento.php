<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Seguimiento</title>
    </head>
    <body>
    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Seguimiento</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Seguimiento.php");
	while($Seg=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Seguimiento.php' method='Post'>
	<input type='hidden' name='usu' value='".$Seg[0]."'>   
    <p>Postulacion</p><input type='text' name='clave'  value='".$Seg[1]."'><BR></BR>
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