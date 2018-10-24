<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Comentarios</title>
    </head>
    <body>
    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Comentarios</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Comentarios.php");
	while($Com=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Comentarios.php' method='Post'>
	<input type='hidden' name='usu' value='".$Com[0]."'>   
    <p>Fecha</p><input type='text' name='fec'  value='".$Com[1]."'><BR></BR>
    <p>Cuerpo</p><input type='text' name='cue'  value='".$Com[2]."'><BR></BR>
    <p>Adopcion</p><input type='text' name='ado'  value='".$Com[3]."'><BR></BR>
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