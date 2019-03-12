<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Estilomod.css">
    <title>Denuncias</title>
</head>
<body id="fondox">
    <form action="../Vista/Vista_Denuncias.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="modificar" class="form-group">
            <?php
                $cod=$_POST["usu"];
            ?>
            <h1>Denuncias</h1>
            <p>Codigo</p><?php echo $cod?><BR>
            <?php
                require_once("../Controlador/Controlador_Modificar_Denuncias.php");
                while($Com=mysqli_fetch_row($resultado)){
                    echo "
                        <form action='../Controlador/Controlador_Actualizar_Denuncias.php' method='Post'>
                            <input type='hidden' name='usu' value='".$Com[0]."'>   
                            <input type='hidden' name='fec'  value='".$Com[1]."'>
                            <p>Descripcion</p>
                            <p><input type='text' name='des'  value='".$Com[2]."' class='form-control'></p>
                            <input type='hidden' name='ced'  value='".$Com[3]."'>
                            <input type='submit' name='botonfunci' value='Modificar' class='btn btn-primary'>
                        </form>
                    ";
                }
                if(isset($_POST['botonfunci'])){
                    echo"
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