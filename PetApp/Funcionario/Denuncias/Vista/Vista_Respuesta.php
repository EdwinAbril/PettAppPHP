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
<body id="fondox">

  <?php
    session_start();
    if (!$_SESSION) {
    echo '<script type="text/javascript">
          alert("Usuario no Autenticado");
          location="../../../Login/Vista/login.php";
          </script>';  
    }
    else{
    $usuar=$_SESSION["Usuario"];
    }
    ?>

<form action="../../Denuncias/Vista/Vista_Denuncias.php">
</form>


<div id="top">
        <form action="Vista_Denuncias.php">
            <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
        </form>


    <div id="insertar">
    <h1 id="titulo">Respuesta</h1>
 <form method='POST' action='../Controlador/Controlador_Respuesta.php'>
   <?php
   $cedul=$_POST["ceduladenun"]

   ?>
   <?php
   echo "
   <input type='hidden' name='ceduladenunci' value='".$cedul."'>
   <input type='hidden' name='encargado' value='".$usuar."'>";?>

    <p><lable>Respuesta</lable></p><textarea type='text' name='mensajedenun'></textarea> 

    <input type='submit' name='aceptardenunci' value='Enviar Respuesta' class='btn btn-primar' id="enviar">
  
 
  </form>
    </div>

  

</body>
</html>