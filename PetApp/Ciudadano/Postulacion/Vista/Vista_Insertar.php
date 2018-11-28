<!DOCTYPE html>
<html>
<head>
	<title>Postulacion</title>
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
          self.location=../../../Login/Vista/login.php;
          </script>';  
    }
    else{
    $usuar=$_SESSION["Usuario"];
    }
    require_once("../Controlador/Controlador_Cedula.php");
    while($Ced=mysqli_fetch_row($resultado)){
    ?>
    <form action="../../Ciudadano/Menu/Ciudadano.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>

    <div id="insertar" >
	<h1>Postularme</h1>


    <form action="../Controlador/Controlador_Insertar.php" method="Post"  enctype="multipart/form-data">
 	    <?php

        $cod=$_POST["codi"];


        
        echo'
        <p><label>Codigo del animal</label></p><input type="number" name="codigo"  value="'.$cod.'" >
        '?>   
           </br>
    </br>
    	

        
        <label>Telefono</label><input type="number" name="telefono" class="form-control">
    	<label>Direccion</label><input type="text" name="direccion" class="form-control">
    	<label>Telefono Fijo</label><input type="number" name="fijo" class="form-control">
        <label>Certificado Laboral</label><input type="file" name="certificado" accept="aplication/pdf" id="cer" class="form-control-file"><?php
        echo"
        <p><label>Cedula</label></p>
        <p>".$Ced[0]."</p>
        <input type='hidden' name='cedula' value='".$Ced[0]."'>
        
        <p><label>Codigo del animal</label></p>
        <p>".$cod."</p>
        <input type='hidden' name='codi'  value='".$cod."'>";
        }
        ?>   
           
        <input type="submit" name="consulta" value="Postularme" class="btn btn-primary">

    </form>
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