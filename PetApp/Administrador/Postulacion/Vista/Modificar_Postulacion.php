<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Postulacion</title>
    </head>
    <body>
    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Postulacion</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Postulacion.php");
	while($Pos=mysqli_fetch_row($resultado)){
	echo "

	
	<form action='../Controlador/Controlador_Actualizar_Postulacion.php' method='Post'>
	<input type='hidden' name='usu' value='".$Pos[0]."'>   
    <p>Telefono</p><input type='text' name='tel'  value='".$Pos[1]."'><BR></BR>
    <p>Direccion</p><input type='text' name='dir'  value='".$Pos[2]."'><BR></BR>
    <p>Telefono Fijo</p><input type='text' name='fij'  value='".$Pos[3]."'><BR></BR>
    <p>Certificado Laboral</p><input type='text' name='cer'  value='".$Pos[4]."'><BR></BR>
    <p>Cedula</p><input type='text' name='ced'  value='".$Pos[5]."'><BR></BR>
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