<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="Estilomod.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Adopcion</title>
</head>
<body id="fondox">
    <form action="../Vista/Vista_Adopciones.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="modificar" class="form-group">
            <?php
            $cod=$_POST["usu"];
            ?>
            <h1>Adopcion</h1>
            <p>Codigo</p><?php echo $cod?>
            <?php
            require_once("../Controlador/Controlador_Modificar_Adopciones.php");
            while($Ado=mysqli_fetch_row($resultado)){
                echo "
                    <form action='../Controlador/Controlador_Actualizar_Adopciones.php' method='Post'>
                        <input type='hidden' name='usu' value='".$Ado[1]."'>   
                        <input type='hidden' name='animal' value='".$Ado[2]."'>
                        <input type='hidden' name='seguimiento'  value='".$Ado[3]."'>
                        <input type='hidden' name=''  value='".$Ado[4]."'><BR>
                        <p>Mensaje</p><p><input type='text' class='form-control' name='mensaje'  value='".$Ado[5]."'></p>
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