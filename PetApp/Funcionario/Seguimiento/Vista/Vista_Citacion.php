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
    <?php
    $pos=$_POST["pos"];
    ?>
    <?php 
    echo "
    <form method='POST' action='../Controlador/Controlador_Citacion.php'>
    <input type='hidden' name='pos' value='".$pos."'>
    <p><lable>Fecha de Citacion</label><input type='date' name='citafec' class='form-control'></p>
    <p><lable>Hora de Citacion</label><input type='time' name='horafec' class='form-control'></p>
    <input type='submit' name='modificarf' value='Enviar Respuesta' class='btn btn-primary'>
    </form>
  
    ";

    ?>
    </div>

    <?php
    if(isset($_POST['modificarf'])){
    echo "<script type='text/javascript'>;
	swal('".$result."');
	</script>";
	}

    ?>

</body>
</html>