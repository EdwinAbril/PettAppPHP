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
    <form action="../../Seguimiento/Vista/Vista_Seguimiento.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
</form>
<body id="fondox">

	<div id="insertar">
	<h1>Respuesta</h1>
 <form method='POST' action='../Controlador/Controlador_Insertarpositivo.php'>
    <?php
    $cedula=$_POST["celuda"];
    $animal=$_POST["aimal"];
   
    ?>
    <?php
        require_once("../Controlador/Controlador_Consulanimal.php");
        while($Anim=mysqli_fetch_row($resultado)){
            echo"
         <input type='hidden' name='nombrefinal' value='".$Anim[1]."'>
         <input type='hidden' name='tipofinal' value='".$Anim[2]."'>
         <input type='hidden' name='edadfinal' value='".$Anim[3]."'>
         <input type='hidden' name='razafinal' value='".$Anim[4]."'>
         <input type='hidden' name='tamañofinal' value='".$Anim[5]."'>
         <input type='hidden' name='generofinal' value='".$Anim[7]."'>
         <input type='hidden' name='colorfinal' value='".$Anim[8]."'>
         ";   
        }
        ?>
  
  
    <?php 
    echo "
   
  
    <input type='hidden' name='cedulaadop' value='".$cedula."'>
    <input type='hidden' name='animaladop' value='".$animal."'>
      <p><lable>Respuesta</lable></p><input type='text' name='mensadop'>
    <input type='submit' name='aceptar2' value='Enviar Respuesta' class='btn btn-primar'>
  
    ";?>
  </form>
    </div>

    <?php
    if(isset($_POST['aceptar2'])){
    echo "<script type='text/javascript'>;
	swal('".$result."');
	</script>";
	}

    ?>

</body>
</html>