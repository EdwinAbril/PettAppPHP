<!DOCTYPE html>
<html>
<head>
	<title>Insertar Denuncias</title>
        <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../Bst/4.1.3/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../Bst/4.1.3/CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../../Bst/4.1.3/CSS/style.css" rel="stylesheet">
 <script src="../../Bst/3.3.7/js/jquery.min.js"></script>
    <script src="../../Bst/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../Bst/3.3.7/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body id="fondox">
        <form action="../Vista/Vista_Denuncias.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
        </form>

    <div id="padre">
    <div id="insertar" class="form-group">
	<h1>Insertar Denuncia</h1>
    <form action="../Controlador/Controlador_Insertar.php"" method="Post"  enctype="multipart/form-data">
 	    <label>Fecha De la Denuncia</label><input type="date" name="fecha" required="" class="form-control">
    	<label>Tipo </label><select  name="tipo" required="" class="form-control">
            <option>Tipo de Denuncia</option>
            <option>Maltrato</option>
            <option>Abandono</option>
        </select>
    	<label>Cedula del Denunciante</label><input type="number" name="cedula" required="" class="form-control">
    	<label>Denuncia</label><input type="text" name="denuncia" required="" class="form-control">
    	<div id="foto">
        <label>Foto</label><input type="file" name="imagen" id="quitar" accept="image/png,image/jpeg,image/jpg" class="form-control-file">
        </div>
        <div class="form-group" id="bot">
    	<input type="submit" name="consulta" value="Realizar Denuncia" class="btn btn-primary">
        </div>
    </form>
</div>
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