<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link href="../../Bst/4.1.3/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../Bst/4.1.3/CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../../Bst/4.1.3/CSS/style.css" rel="stylesheet">
 <script src="../../Bst/3.3.7/js/jquery.min.js"></script>
    <script src="../../Bst/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../Bst/3.3.7/js/scripts.js"></script>

    <link rel="stylesheet" type="text/css" href="Estilomod.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Eventos</title>
    </head>
    <body id="fondox">

        <form action="../Vista/Vista_Eventos.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
        </form>
            <div id="padre">
        <div id="modificar" class="form-group">

    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Eventos</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Eventos.php");
	while($Eve=mysqli_fetch_row($resultado)){
	echo "

	<tr>
	<form action='../Controlador/Controlador_Actualizar_Eventos.php' method='Post'>
	<input type='hidden' name='usu' value='".$Eve[0]."'>   
    <p>Fecha</p><input type='date' name='fec'  value='".$Eve[1]."'><BR></BR>
    <p>Lugar</p><input type='text' name='lug'  value='".$Eve[2]."'><BR></BR>
    <p>Hora</p><input type='time' name='dur'  value='".$Eve[3]."'><BR></BR>
    <p>Descripcion</p><input type='text' name='des'  value='".$Eve[4]."'><BR></BR>
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