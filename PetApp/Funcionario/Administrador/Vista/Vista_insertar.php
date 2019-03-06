<?php
require_once("../Controlador/Controlador_insertar.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar Usuario del Administrador</title>
</head>
	<meta charset="utf-8">
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
    <link rel="stylesheet" type="text/css" href="Estilo.css">

<body id="fondox">


    <form action="../Vista/Vista_Administrador.php">
	<form action="../Vista/Vista_Administrador.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
<div id="padre">
	<div id="insertar" class="form-group">
	<h1>Insertar Administrador</h1>
 <form action="../Controlador/Controlador_insertar.php" method="Post" required="" >
 	<label>Nombre de Usuario </label><input type="text" name="nombre" required="" class="form-control">
    <label>Clave</label><input type="password" name="clave" required="" class="form-control">
      <div class="form-group" id="bot">
      <input type="submit" name="consulta" value="Insertar Nuevo Usuario" class="btn btn-primary">
      </div>
    </form>
</div>
</div>
</center>
<?php
if(isset($_POST['consulta']))
{
echo "<script type='text/javascript'>;
	swal('".$result."', '', 'success');
	</script>";
	
}

    ?>

</body>
</html>