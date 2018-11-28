<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Estilomod.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Administrador</title>
    </head>
    <body id="fondox">
    

    <form action="../Vista/Vista_Administrador.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="modificar" class="form-group">
        	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Administrador</h1>

        <p>Usuario</p><?php echo $cod?>

        <?php
	require_once("../Controlador/Controlador_Modificar_Administrador.php");
	while($Adm=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Administrador.php' method='Post'>
	<input type='hidden' name='usu' value='".$Adm[0]."'>   
    <p>Clave</p><input type='text' name='clave'  value='".$Adm[1]."'><BR></BR>
    <input type='submit' name='botonfunci' value='Modificar' class='btn btn-primary'>
    </form>";
	}
	
	if(isset($_POST['botonfunci'])){
		echo"<script type='text/javascript'>;
		swal('".$result."');
		</script>";

	}

	?>
</div>
        </div>


    </body>
</html>