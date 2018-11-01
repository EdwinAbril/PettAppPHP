<!DOCTYPE html>
<html>
<head>
	<title>Postulacion</title>
      <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
        <form action="../Vista/Vista_Postulacion.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
<center>
<div id="insertar" >
	<h1>Postulacion</h1>
 <form action="../Controlador/Controlador_Insertar.php"" method="Post"  enctype="multipart/form-data">
 	<p><label>Telefono</label></p><input type="number" name="telefono">
    	<p><label>Direccion</label></p><input type="text" name="direccion">
    	<p><label>Telefono Fijo</label></p><input type="number" name="fijo">
    	<p><label>Certificado Laboral</label></p><CENTER><input type="file" name="certificado" accept="aplication/pdf" id="quitar"></CENTER>
    	<p><label>Cedula</label></p><input type="number" name="cedula"></label>
        <p><label>Codigo del animal</label></p><input type="number" name="codigo">
           </br>
    </br>
    	<input type="submit" name="consulta" value="Realizar Postulacion" class="btn btn-primary">
    </form>
</div>
</center>
    <?php
if(isset($_POST['consulta']))
{
	echo "<script type='text/javascript'>;
	alert('".$result."');
	</script>";
}

    ?>
</body>
</html>