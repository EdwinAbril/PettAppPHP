<?php
require_once("../Controlador/Controlador_Veterinaria.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insertar Veterinaria</title>
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body id="fondox">
    <form action="../Vista/Vista_Veterinaria.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="insertar">
        <h1>Insertar Veterinaria</h1>
        <form action="../Controlador/Controlador_Veterinaria.php" method="Post" enctype="multipart/form-data">
            <p><label>Nit </label><input type="text" name="nit" required="" class="form-control"></p>
            <p><label>Telefono</label><input type="number" name="telefono" required="" class="form-control"></p>
            <p><label>Nombre</label><input type="text" name="nombre" required="" class="form-control"></p>
            <p><label>Direccion</label><input type="text" name="direccion" required="" class="form-control"></p>
            <div id="padre">
                <p><label>Foto</label></p>
                <input type="file" name="fot" accept="image/png,image/jpeg,image/jpg" id="quitar">
            </div>
            <input type="submit" name="consulta" value="Insertar Nueva Veterinaria" class="btn btn-primary">
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