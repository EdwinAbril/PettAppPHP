<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="Estilomod.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Usuario Ciudadano</title>
    </head>
    <body id="fondox">
    

    <form action="../../Ciudadano/Vista/Vista_Ciudadano.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="modificar" class="form-group">
        	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Usuario Ciudadano</h1>

        <p>Usuario</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Usuario.php");
	while($Usu=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Usuario.php' method='Post' enctype='multipart/form-data'>
    <div id='centro'>   
    <p>Foto</p><label class='botonModi'>
    <img src='../../../Uploads/Usuarios_Fotos/".$Usu[3]."' style='width:150px;height:150px;border-radius: 150px;' id='fotomod'>
    <input type='file' class='file' name='fo' accept='image/jpeg,image/png'>
    <img src='../Vista/Imagenes/Icono.png' width='40' heigth='40'></label>
    </div>
    <input type='hidden' name='usu' value='".$Usu[0]."'>
    <input type='hidden' name='fotosi' value='".$Usu[3]."'>   
    <p>Clave</p><input type='password' name='clave'  value='".$Usu[1]."'><BR></BR>
    <input type='submit' name='botonfunci' value='Modificar' class='btn btn-primary'>
    </form></form>";
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