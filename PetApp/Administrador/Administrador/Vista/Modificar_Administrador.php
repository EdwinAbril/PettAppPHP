<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Estilomod.css">
        <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
        <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
        <link href="../../../Bst/4.3.1/CSS/style.css" rel="stylesheet">
        <script src="../../../Bst/4.3.1/js/jquery.min.js"></script>
        <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../../Bst/4.3.1/js/scripts.js"></script>
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

	<form action='../Controlador/Controlador_Actualizar_Administrador.php' method='Post' enctype='multipart/form-data'>
    <div id='centro'>   
    <p>Foto</p><label class='botonModi'>
    <img src='../../../Uploads/Usuarios_Fotos/".$Adm[3]."' style='width:150px;height:150px;border-radius: 150px;' id='fotomod'>
    <input type='file' class='file' name='fo' accept='image/jpeg,image/png'>
    <img src='../Vista/Imagenes/Icono.png' width='40' heigth='40'></label>
    </div>
	<input type='hidden' name='usu' value='".$Adm[0]."'>
    <input type='hidden' name='fotosi' value='".$Adm[3]."'>   
    <p>Clave</p><input type='password' name='clave'  value='".$Adm[1]."'><BR></BR>
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