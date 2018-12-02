<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" type="text/css" href="Estilomod.css">
        <title>Animal</title>
    </head>
    <body id="fondox">

        <form action="../Vista/Vista_Animal.php">
        <input type="submit" name="volver" value="Volver"  class="btn btn-outline-light" id="vol">
        </form>
         <div id="padre">
        <div id="modificar" class="form-group">

    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Animal</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php
	require_once("../Controlador/Controlador_Modificar_Animal.php");
	while($Ani=mysqli_fetch_row($resultado)){
	echo '

	<tr>
	<form action="../Controlador/Controlador_Actualizar_Animal.php" method="Post">
    <div id="centro">   
    <p>Foto</p><label class="botonModi"><img src="../../../Uploads/Mascotas_fotos/'.$Ani[5].'" width="180" heigth="180" id="fotomod"><input type="file" class="file" name="fos" accept="image/jpeg,image/png"><img src="../Vista/Imagenes/Icono.png" width="40" heigth="40"></label>
    </div>
    <input type="hidden" name="usu" value="'.$Ani[0].'">
    <input type="hidden" name="fotosi" value="'.$Ani[5].'">
    <label>Nombre del Animal</label><input type="text" name="nombre" class="form-control" required="" value="'.$Mas[1].'">
    <label for="t1">Tipo de Animal<abbr title="Este campo es obligatorio"></abbr></label>
    <input type="text" id="t1" class="form-control" name="tipo" value="'.$Ani[2].'" list="l1" required
           pattern="[Gg]ato|[Pp]erro">
    <datalist id="l1">
        <option>Gato</option>
        <option>Perro</option>
    </datalist>
    <label>Edad del Animal</label><input type="text" name="edad" class="form-control" required="" value="'.$Ani[3].'">
    <label>Raza del Animal</label><input type="text" name="raza" class="form-control" required="" value="'.$Ani[4].'">
    <input type="text" id="t2" class="form-control" name="tamaño" value="'.$Ani[6].'" list="l2" required
           pattern="[Gg]rande|[Mm]ediano|[Pp]equeño">
    <datalist id="l2">
        <option>Grande</option>
        <option>Mediano</option>
        <option>Pequeño</option>
    </datalist>
    <label for="t3">Genero<abbr title="Este campo es obligatorio"></abbr></label>
    <input type="text" id="t3" class="form-control" name="genero" value="'.$Ani[7].'" list="l3" required
           pattern="|[Mm]acho|[Hh]embra">
    <datalist id="l3">
        <option>Macho</option>
        <option>Hembra</option>
    </datalist>
    <label>Color de la Mascota</label><input type="text" name="color" class="form-control" required="" value="'.$Ani[8].'">
	<input type="submit" name="botonfunci" value="Modificar" class="btn btn-primary">
    </form>';
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