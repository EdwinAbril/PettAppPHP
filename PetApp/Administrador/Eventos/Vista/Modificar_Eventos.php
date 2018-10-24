<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eventos</title>
    </head>
    <body>
    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Eventos</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Eventos.php");
	while($Eve=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Eventos.php' method='Post'>
	<input type='hidden' name='usu' value='".$Eve[0]."'>   
    <p>Fecha</p><input type='text' name='fec'  value='".$Eve[1]."'><BR></BR>
    <p>Lugar</p><input type='text' name='lug'  value='".$Eve[2]."'><BR></BR>
    <p>Duracion</p><input type='text' name='dur'  value='".$Eve[3]."'><BR></BR>
    <p>Descripcion</p><input type='text' name='des'  value='".$Eve[4]."'><BR></BR>
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