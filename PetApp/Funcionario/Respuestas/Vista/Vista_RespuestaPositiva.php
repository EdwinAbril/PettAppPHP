<!DOCTYPE html>
<html>
<head>
	<title>Finalizacion del Proceso</title>
         <meta charset="utf-8">
    <meta charset="utf-8">
        <link rel="stylesheet" href="Estilos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
        <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
        <link href="../../../Bst/4.3.1/CSS/style.css" rel="stylesheet">
        <script src="../../../Bst/4.3.1/js/jquery-3.3.1.min.js"></script>
        <script src="../../../Bst/4.3.1/js/jquery.min.js"></script>
        <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
    <form action="../../Seguimiento/Vista/Vista_Seguimiento.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
</form>
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
         <input type='hidden' name='fotofinal' value='".$Anim[5]."'>
         <input type='hidden' name='tamañofinal' value='".$Anim[6]."'>
         <input type='hidden' name='generofinal' value='".$Anim[7]."'>
         <input type='hidden' name='colorfinal' value='".$Anim[8]."'>
         ";   
        }
        ?>
  
  
    <?php 
    require_once("../Controlador/Controlador_Insertarpositivo.php");
   
    echo "

  
    <input type='hidden' name='cedulaadop' value='".$cedula."'>
    <input type='hidden' name='animaladop' value='".$animal."'>
      <p><lable>Respuesta</label></p><textarea type='text' name='mensadop' class='form-control'></textarea>
      <input type='hidden' name='encar' value='".$usuar."'></BR>
    <input type='submit' name='aceptar2' value='Enviar Respuesta' class='btn btn-primary'>
  
    ";

    ?>
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