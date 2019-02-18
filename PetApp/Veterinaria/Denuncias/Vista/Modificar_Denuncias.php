<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="Estilomod.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Denuncias</title>
    </head>
    <body id="fondox">

        <form action="../Vista/Vista_Denuncias.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
        </form>
        <div id="padre">
        <div id="modificar" class="form-group">

    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Denuncias</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Denuncias.php");
	while($Com=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Denuncias.php' method='Post'>
	<input type='hidden' name='usu' value='".$Com[0]."'>   
    <p>Fecha</p><input type='text' name='fec'  value='".$Com[1]."'><BR></BR>
    <p>Descripcion</p><input type='text' name='des' pattern='[a-zA-Z]{1,250}' title='maximo 250 letras' value='".$Com[2]."'><BR></BR>
    <p>Cedula</p><input type='text' name='ced'  value='".$Com[3]."'><BR></BR>
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