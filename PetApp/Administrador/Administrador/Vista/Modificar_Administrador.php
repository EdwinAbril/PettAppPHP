<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Funcionario</title>
    </head>
    <body>
    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Funcionario</h1>

        <p>Usuario</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Administrador.php");
	while($Adm=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Administrador.php' method='Post'>
	<input type='hidden' name='usu' value='".$Adm[0]."'>   
    <p>Clave</p><input type='text' name='clave'  value='".$Adm[1]."'><BR></BR>
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