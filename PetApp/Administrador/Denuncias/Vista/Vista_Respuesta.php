<!DOCTYPE html>
<html>
<head>
    <title>Respuesta</title>
           <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<form action="../../Denuncias/Vista/Vista_Denuncias.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
</form>
<body id="fondox">
    <div id="insertar">
    <h1>Respuesta</h1>
 <form method='POST' action='../Controlador/Controlador_Respuesta.php'>
   <?php
   $cedul=$_POST["ceduladenun"]

   ?>
   <?php
   echo "
    <p><label>Cedula del Denunciante</label></p><input type='text' name='ceduladenunci' value='".$cedul."'>"?>

    <p><lable>Respuesta</lable></p><input type='text' name='mensajedenun'>

    <input type='submit' name='aceptardenunci' value='Enviar Respuesta' class='btn btn-primar'>
  
 
  </form>
    </div>

  

</body>
</html>