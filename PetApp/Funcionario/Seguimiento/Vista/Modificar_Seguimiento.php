<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" type="text/css" href="Estilomod.css">
        <title>Seguimiento</title>
    </head>
    <body id="fondox">

        <form action="../Vista/Vista_Seguimiento.php">
        <input type="submit" name="volver" value="Volver"  class="btn btn-outline-light" id="vol">
        </form>
          <div id="padre">
        <div id="modificar" class="form-group">

    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Seguimiento</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Seguimiento.php");
	while($Seg=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Seguimiento.php' method='Post'>
	<input type='hidden' name='usu' value='".$Seg[0]."'>   
    <p>Postulacion</p><input type='text' name='clave'  value='".$Seg[1]."'><BR></BR>
    <input type='submit' name='botonfunci' value='Modificar'  class='btn btn-primary'>
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