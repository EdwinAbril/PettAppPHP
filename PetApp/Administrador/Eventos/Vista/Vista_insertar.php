<?php
require_once("../Controlador/Controlador_insertar.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insertar Evento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body id="fondox">
    <form action="../Vista/Vista_Eventos.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="insertar" >
        <h1>Insertar Evento</h1>
        <form action="../Controlador/Controlador_insertar.php" method="Post" enctype="multipart/form-data">
            <p><label>Fecha del evento </label></p><input type="date" name="fecha" required="" class="form-control">
            <p><label>Lugar del evento</label></p><input type="text" name="lugar" required="" class="form-control">
            <p><label>Hora del evento</label></p><input type="time" name="duracion" required="" class="form-control">
            <p><label>Descripcion</label></p><input type="text" name="desc" required="" class="form-control">
            <div id="padre">
                <p><label>Foto</label></p><p><input type="file" name="fot" accept="image/png,image/jpeg,image/jpg" id="fot" ></p>
            </div>
            <input type="submit" name="consulta" value="Insertar Nuevo Evento" class="btn btn-primary">
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