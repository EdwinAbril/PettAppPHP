<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Adopciones</title>
    </head>
    <body>
    	<?php

    	$cod=$_GET["envidat"];

    	?>
        <h1>Adopciones</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Adopciones.php");
	while($Ado=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='' method='Post'>   
	<p>Animal</p><input type='text' name='animal' value='".$Ado[1]."'><BR>
    <p>Seguimiento</p><input type='text' name='seguimiento'  value='".$Ado[2]."'><BR>
    
    <input type='submit' name='botonfunci' value='Modificar'>
    </form>";
	}
	
	if(isset($_POST['botonfunci'])){
		require_once("../Controlador/Controlador_Actualizar_Adopciones.php");
		$cod=$_GET["envidat"];
		$tel=$_POST['animal'];
		$nom=$_POST['seguimiento'];
		$mostrar= new MetodoAdopciones();

		$mensaje=$mostrar->ModificarAdopcion($cod,$tel,$nom);

		echo"<script type='text/javascript'>;
		alert('".$mensaje."');
		</script>";

	}

	?>
        
    </body>
</html>