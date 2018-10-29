<!DOCTYPE html>
<html>
<head>
	<title>Insertar Denuncia</title>
        <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
        <form action="../Vista/Vista_Denuncias.php">

    <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
    </form>
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
</form>
<center>
    <div id="insertar" >
	<h1>Insertar Denuncia</h1>
 <form action="../Controlador/Controlador_Insertar.php"" method="Post"  enctype="multipart/form-data">
 	<p><label>Fecha De la Denuncia</label></p><input type="date" name="fecha" required="">
    	<p><label>Tipo de Denuncia</label></p><input type="text" name="tipo" required="">
    	<p><label>Cedula del Denunciante</label></p><input type="number" name="cedula" required="">
    	<p><label>Denuncia</label></p><input type="text" name="denuncia" required="">
    	<p><label>Foto</label></p><center><input type="file" name="imagen" id="quitar" accept="image/png,image/jpeg,image/jpg"></center></label>
           </br>
    </br>
    	<input type="submit" name="consulta" value="Realizar Denuncia" class="btn btn-primary">
    </form>
</div>
</center>
    <?php
if(isset($_POST['consulta']))
{
	echo "<script type='text/javascript'>;
	alert('".$resulta."');
	</script>";
}

    ?>
</body>
</html>