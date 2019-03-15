<?php
require_once("../Controlador/Controlador_insertar.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertar Usuario del Administrador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
  <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
  <script src="../../../Bst/4.3.1/js/scripts.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
</head>

<body id="fondox">
    <form action="../Vista/Vista_Administrador.php">
      <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
  <div id="padre">
    <div id="insertar" class="form-group">
      <h1>Insertar Administrador</h1>
      <form action="../Controlador/Controlador_insertar.php" method="Post" enctype="multipart/form-data">
        <label>Nombre de Usuario </label>
        <input type="text" name="nombre" required="" class="form-control">
        <label>Foto </label>
        <div id="padre">
          <input type="file" name="fo" accept="image/png,image/jpeg,image/jpg" id="quitar">
        </div>
        <label>Clave</label>
        <input type="password" name="clave" required="" class="form-control">
        <div class="form-group" id="bot">
          <input type="submit" name="consulta" value="Insertar Nuevo Usuario" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
  <?php
  if(isset($_POST['consulta']))
  {
  echo "<script type='text/javascript'>;
  	swal('".$result."');
  	</script>";
  	
  }
  ?>
</body>
</html>