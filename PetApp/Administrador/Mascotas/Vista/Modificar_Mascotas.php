<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Mascotas</title>
    </head>
    <body>
    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Mascotas</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Mascotas.php");
	while($Mas=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Mascotas.php' method='Post'>
	<input type='hidden' name='usu' value='".$Mas[0]."'>   
    <p>Nombre</p><input type='text' name='nom'  value='".$Mas[1]."'><BR></BR>
    <p>Descendencia</p><input type='text' name='des'  value='".$Mas[2]."'><BR></BR>
    <p>Estado</p><input type='text' name='est'  value='".$Mas[3]."'><BR></BR>
    <p>Tipo</p><input type='text' name='tip'  value='".$Mas[4]."'><BR></BR>
    <p>Edad</p><input type='text' name='eda'  value='".$Mas[5]."'><BR></BR>
    <p>Raza</p><input type='text' name='raz'  value='".$Mas[6]."'><BR></BR>
    <p>Cedula</p><input type='text' name='ced'  value='".$Mas[7]."'><BR></BR>
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