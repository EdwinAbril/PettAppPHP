<!DOCTYPE html>
<html>
<head>
	<title>Postulacion</title>
</head>
<body>
	<h1>Postulacion</h1>
 <form action="../Controlador/Controlador_Insertar.php"" method="Post"  enctype="multipart/form-data">
 	<p><label>Telefono</label></p><input type="number" name="telefono">
    	<p><label>Direccion</label></p><input type="text" name="direccion">
    	<p><label>Telefono Fijo</label></p><input type="number" name="fijo">
    	<p><label>Certificado Laboral</label></p><input type="file" name="certificado" accept="aplication/pdf">
    	<p><label>Cedula</label></p><input type="number" name="cedula"></label>
        <p><label>Codigo del animal</label></p><input type="number" name="codigo">
    	<input type="submit" name="consulta" value="Realizar Postulacion">
    </form>
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