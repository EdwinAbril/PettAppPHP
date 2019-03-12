<!DOCTYPE html>
<html>
<head>
  <title>Respuesta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
  <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
  <script src="../../../Bst/4.3.1/js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="Estilos.css">
</head>
<body id="fondox">
  <div id="top">
    <form action="Vista_Denuncias.php">
      <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="insertar">
      <h1 id="titulo">Respuesta</h1>
      <form method='POST' action='../Controlador/Controlador_Respuesta.php'>
        <?php
        $cedul=$_POST["ceduladenun"];
        echo "
        <input type='hidden' name='ceduladenunci' value='".$cedul."'>
        ";
        ?>
        <input type="text" name="encargado" class="form-control">
        <p><lable>Respuesta</lable></p><textarea type='text' name='mensajedenun' class="form-control"></textarea> 
        <input type='submit' name='aceptardenunci' value='Enviar Respuesta' class='btn btn-primary' id="enviar">
      </form>
    </div>
  </div>
</body>
</html>