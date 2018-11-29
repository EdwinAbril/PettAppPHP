<?php
require_once("../Controlador/Controlador_Insertarpositivo.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Finalizacion del Proceso</title>
         <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
    <form action="../Vista/Vista_Seguimiento.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
</form>
<body id="fondox">
    <center>
	<div id="insertar">
	<h1>Respuesta</h1>
 <form action="../Controlador/Controlador_Insertarpositivo.php" method="Post">
    <?php
    $cedula=$_POST["cedula"];
    ?>
<?php
echo"
 	<p><label>Cedula del Postulante </label></p><input type='number' name='cedula' value='".$cedula."'>"?>
        </br>
        <p><lable>Respuesta</lable></p><input type="text" name="mensaje">
    </br>
    	<input type="submit" name="aceptar" value="Enviar Respuesta" class="btn btn-primary">
    </form>
</div>
</center>
    <?php
if(isset($_POST['consulta']))
{
echo "<script type='text/javascript'>;
	swal('".$result."')'
    });
	</script>";
	
}

    ?>

</body>
</html>