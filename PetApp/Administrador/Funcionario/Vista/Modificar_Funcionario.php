<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Funcionario</title>
    </head>
    <body>
    	<?php

    	$cod=$_GET["envidat"];

    	?>
        <h1>Funcionario</h1>

        <p>Cedula</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Funcionario.php");
	while($Fun=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='' method='Post'>   
	<p>Telefono</p><input type='text' name='telefono' value='".$Fun[1]."'><BR>
    <p>Nombre</p><input type='text' name='nombre'  value='".$Fun[2]."'><BR>
    <p>Correo</p><input type='text' name='correo'  value='".$Fun[3]."'><BR>
    <p>Clave</p><input type='text' name='clave'  value='".$Fun[4]."'><BR><BR>
    
    <input type='submit' name='botonfunci' value='Modificar'>
    </form>";
	}
	
	if(isset($_POST['botonfunci'])){
		require_once("../Controlador/Controlador_Actualizar_Funcionario.php");
		$cod=$_GET["envidat"];
		$tel=$_POST['telefono'];
		$nom=$_POST['nombre'];
		$cor=$_POST['correo'];
		$cla=$_POST['clave'];
		$mostrar= new MetodoFuncionario();

		$mensaje=$mostrar->ModificarFuncionario($cod,$tel,$nom,$cor,$cla);

		echo"<script type='text/javascript'>;
		alert('".$mensaje."');
		</script>";

	}

	?>
        
    </body>
</html>