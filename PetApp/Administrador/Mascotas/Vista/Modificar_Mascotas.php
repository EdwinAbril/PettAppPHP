<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.12/dist/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Estilomod.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Mascotas</title>
    </head>
    <body id="fondox">

        <form action="../Vista/Vista_Mascotas.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
        </form>
          <div id="padre">
        <div id="modificar" class="form-group">

    	<?php

    	$cod=$_POST["usu"];

    	?>
        <h1>Mascotas</h1>

        <p>Codigo</p><?php echo $cod?><BR>

        <?php

	require_once("../Controlador/Controlador_Modificar_Mascotas.php");
	while($Mas=mysqli_fetch_row($resultado)){
	echo '
    
    <form action="../Controlador/Controlador_Actualizar_Mascotas.php" method="Post" enctype="multipart/form-data">
    <div id="centro">
    <p>Foto</p><label class="botonModi"><img src="../../../Uploads/Mascotas_fotos/'.$Mas[5].'" style="width:180px;height:180px;border-radius: 150px;"" id="fotomod"><input type="file" class="file" name="fos" accept="image/jpeg,image/png"><img src="../Vista/Imagenes/Icono.png" width="40" heigth="40"></label>
    </div>
	<input type="hidden" name="usu" value="'.$Mas[0].'">   
    <input type="hidden" name="fotosi" value="'.$Mas[5].'">
    <label>Nombre de la Mascota</label><input type="text" name="nombre" class="form-control" required="" value="'.$Mas[1].'">
    <label for="t1">Tipo de Mascota<abbr title="Este campo es obligatorio"></abbr></label>
    <input type="text" id="t1" class="form-control" name="tipo" value="'.$Mas[2].'" list="l1" required
           pattern="[Gg]ato|[Pp]erro">
    <datalist id="l1">
        <option>Gato</option>
        <option>Perro</option>
    </datalist>
    <label>Edad de la Mascota</label><input type="text" name="edad" class="form-control" required="" value="'.$Mas[3].'">
    <label>Raza de la Mascota</label><input type="text" name="raza" class="form-control" required="" value="'.$Mas[4].'">
    <label for="t2">Tamaño<abbr title="Este campo es obligatorio"></abbr></label>
    <input type="text" id="t2" class="form-control" name="tamaño" value="'.$Mas[6].'" list="l2" required
           pattern="[Gg]rande|[Mm]ediano|[Pp]equeño">
    <datalist id="l2">
        <option>Grande</option>
        <option>Mediano</option>
        <option>Pequeño</option>
    </datalist>
    <label for="t3">Genero<abbr title="Este campo es obligatorio"></abbr></label>
    <input type="text" id="t3" class="form-control" name="genero" value="'.$Mas[7].'" list="l3" required
           pattern="|[Mm]acho|[Hh]embra">
    <datalist id="l3">
        <option>Macho</option>
        <option>Hembra</option>
    </datalist>
    <label>Color de la Mascota</label><input type="text" name="color" class="form-control" required="" value="'.$Mas[8].'">
    <label>Cedula del Dueño</label><input type="number" name="cedula" class="form-control" required="" value="'.$Mas[9].'">
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