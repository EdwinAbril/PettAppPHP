<!DOCTYPE html>
<html>
<head>
	<title>Insertar Mascota</title>
        <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body id="fondox">
        <form action="../Vista/Vista_Mascotas.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
</form>
<center>
<div id="insertar" >
	<h1>Insertar Mascota</h1>
 <form action="../Controlador/Controlador_Insertar.php"" method="Post"  enctype="multipart/form-data">
 	<label>Nombre de la Mascota</label><input type="text" name="nombre" class="form-control" required="">
    	<label>Tipo</label><select  name="tipo" class="form-control" required="">
            <option>Tipo de Mascota</option>
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
        </select>
    	<label>Edad de la Mascota</label><input type="text" name="edad" class="form-control" required="">
    	<label>Raza de la Mascota</label><input type="text" name="raza" class="form-control" required="">
        <label>Foto de la Mascota</label><input type="file" name="imagen" accept="image/png,image/jpeg,image/jpg" id="quitar" required=""></label>
        <label>Tamaño </label><select name="tamaño" class="form-control" required="">
            <option>Tamaño de la Mascota</option>
            <option value="Grande">Grande</option>
            <option value="Mediano">Mediano</option>
            <option value="Pequeño">Pequeño</option>
        </select>
         <label>Genero</label><select  name="genero" class="form-control" required="">
            <option>Genero de la Mascota</option>
            <option value="Macho">Macho</option>
            <option value="Hembra">Hembra</option>
        </select>
        <label>Color de la Mascota</label><input type="text" name="color" class="form-control" required="">
    	
          <label>Cedula del Dueño</label><input type="number" name="cedula" class="form-control" required="">
    </br>
    </br>
    	<input type="submit" name="consulta" value="Insertar Nueva Mascota" class="btn btn-primary">
    </form>
</div>
</center>
    <?php
if(isset($_POST['consulta']))
{
	echo "<script type='text/javascript'>;
	swal('".$resulta."');
	</script>";
}

    ?>
</body>
</html>