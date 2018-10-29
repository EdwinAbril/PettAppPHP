<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Funcionario</title>
    </head>
    <body>

        <form action="../Vista/Vista_Funcionario.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
        </form>

    	<?php

    	$cod=$_POST["cod"];

    	?>
        <h1>Funcionario</h1>

        <p>Cedula</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Funcionario.php");
	while($Fun=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Funcionario.php' method='Post'>
	<input type='hidden' name='cod' value='".$Fun[0]."'>   
	<p>Telefono</p><input type='text' name='telefono' value='".$Fun[1]."'><BR>
    <p>Nombre</p><input type='text' name='nombre'  value='".$Fun[2]."'><BR>
    <p>Correo</p><input type='text' name='correo'  value='".$Fun[3]."'><BR>
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