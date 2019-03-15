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
 <form method='POST' action='../Controlador/Controlador_Citacion.php'>
    <?php
    $pos=$_POST["cp"];
    $tel=$_POST["tel"];
    $dir=$_POST["dir"];
    $fij=$_POST["tf"];
    $ece=$_POST["fot"];
    $est=$_POST["est"];
    $res=$_POST["cre"];
    $ubi=$_POST["ubi"];
    $viv=$_POST["tvi"];
    $pun=$_POST["pun"];
    $rec=$_POST["rpu"];
    $ced=$_POST["cedu"];
    $ani=$_POST["an"];
    ?>
    <?php 
    require_once("../Controlador/Controlador_Citacion.php");
    echo "
    <input type='hidden' name='posseg' value='".$pos."'>
    <input type='hidden' name='telseg' value='".$tel."'>
    <input type='hidden' name='dirseg' value='".$dir."'>
    <input type='hidden' name='fijseg' value='".$fij."'>
    <input type='hidden' name='eceseg' value='".$ece."'>
    <input type='hidden' name='estseg' value='".$est."'>
    <input type='hidden' name='resseg' value='".$res."'>
    <input type='hidden' name='ubiseg' value='".$ubi."'>
    <input type='hidden' name='vivseg' value='".$viv."'>
    <input type='hidden' name='punseg' value='".$pun."'>
    <input type='hidden' name='recseg' value='".$rec."'>
    <input type='hidden' name='cedseg' value='".$ced."'>
    <input type='hidden' name='aniseg' value='".$ani."'>
    <p><lable>Fecha de Citacion</label><input type='date' name='citafec' class='form-control'></p>
    <p><lable>Hora de Citacion</label><input type='time' name='horafec' class='form-control'></p>
    <input type='submit' name='aceptarc' value='Enviar Respuesta' class='btn btn-primary'>
  
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