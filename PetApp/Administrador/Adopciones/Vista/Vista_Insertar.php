<!DOCTYPE html>
<html>
<head>
    <title>Adopciones</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body id="fondox">
    <form action="../Vista/Vista_Adopciones.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="insertar" class="form-group">
            <h1>Adopcion</h1>
            <form action="../Controlador/Controlador_Insertar.php"" method="Post"  enctype="multipart/form-data">
                <label>Codigo  del Animal</label><input type="number" name="animal" class="form-control">
                <label>Respuesta</label><input type="text" name="respuesta" class="form-control">
                <div class="form-group" id="bot">
                    <input type="submit" name="consulta" value="Finalizar Adopcion"  class="btn btn-primary">
                </div>
            </form>
        <?php
            if(isset($_POST['consulta'])){
                echo "
                    <script type='text/javascript'>;
                    swal('".$result."');
                    </script>
                ";
            }
        ?>
        </div>
    </div>
</body>
</html>