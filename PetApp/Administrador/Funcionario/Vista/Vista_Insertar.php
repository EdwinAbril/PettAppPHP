<?php
require_once("../Controlador/Controlador_Insertar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insertar Funcionario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body id="fondox">
    <form action="../Vista/Vista_Funcionario.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="insertar">
        <h1>Insertar Funcionario</h1>
        <form action="../Controlador/Controlador_Insertar.php" method="Post" enctype="multipart/form-data">
            <div id="padre">
                <p><label>Foto</label></p>
                <input type="file" name="fo" accept="image/png,image/jpeg,image/jpg" id="quitar">
            </div>
            <p><label>Contraseña</label><input type="text" name="con" required="" class="form-control"></p>
            <p><label>Cedula </label><input type="number" name="cedula" required="" class="form-control"></p>
            <p><label>Telefono</label><input type="number" name="telefono" required="" class="form-control"></p>
            <p><label>Nombre</label><input type="text" name="nombre" required="" class="form-control"></p>
            <p><label>Correo</label><input type="mail" name="correo" required="" class="form-control"></p>
            <p><label>Cargo</label><input type="text" name="cargo" required="" class="form-control"></p>
            <p><label>Dependencia</label><input type="text" name="depen" required="" class="form-control"></p>
            <input type="submit" name="consulta" value="Insertar Nuevo Usuario" class="btn btn-primary">
        </form>
    </div>
<?php
if(isset($_POST['consulta'])){
    echo "
        <script type='text/javascript'>;
        swal('".$result."');
        </script>
    ";
}
?>
</body>
</html>