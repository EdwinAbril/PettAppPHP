<?php
require_once("../Controlador/Controlador_Insertar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insertar Funcionario</title>

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
       <form action="../Vista/Vista_Funcionario.php">
  <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
</form>
<center>
    <div id="insertar">
    <h1>Insertar Funcionario</h1>
 <form action="../Controlador/Controlador_Insertar.php" method="Post" enctype="multipart/form-data">
    <label>Foto </label><div id="padre"><input type="file" name="fo" accept="image/png,image/jpeg,image/jpg" id="quitar"></div>
    <p><label>Nombre de Usuario</label></p><input type="text" name="user" required="">
    <p><label>Contraseña</label></p><input type="text" name="con" required="">
    <p><label>Cedula </label></p><input type="number" name="cedula" required="">
        <p><label>Telefono</label></p><input type="number" name="telefono" required="">
        <p><label>Nombre</label></p><input type="text" name="nombre" required="">
            <p><label>Correo</label></p><input type="mail" name="correo" required="">
            <p><label>Cargo</label></p><input type="text" name="cargo" required="">
            <p><label>Dependencia</label></p><input type="text" name="depen" required="">
            </br>
    </br>
        <input type="submit" name="consulta" value="Insertar Nuevo Usuario" class="btn btn-primary">
    </form>
</div>
</center>
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