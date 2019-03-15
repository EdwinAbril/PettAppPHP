<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="Estilomod.css">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Ciudadano</title>
</head>
<body id="fondox">
    <form action="../Vista/Vista_Ciudadano.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="modificar" class="form-group">
            <?php
            $cod=$_POST["usu"];
            ?>
            <h1>Ciudadano</h1>
            <p><label>Cedula</label></p><p><?php echo $cod?></p>
            <?php
            require_once("../Controlador/Controlador_Modificar_Ciudadano.php");
            while($Ciu=mysqli_fetch_row($resultado)){
                echo "
                    <form action='../Controlador/Controlador_Actualizar_Ciudadano.php' method='Post'>
                        <input type='hidden' name='usu' value='".$Ciu[0]."'>   
                        <p><label>Nombre</label><input type='text' name='nom'  value='".$Ciu[1]."' class='form-control'></p>
                        <p><label>Telefono</label><input type='text' name='tel'  value='".$Ciu[2]."' class='form-control'></p>
                        <p><label>Direccion</label>
                        <input type='text' name='dir'  value='".$Ciu[3]."' class='form-control'></p>
                        <p><label>Correo</label><input type='text' name='cor'  value='".$Ciu[4]."' class='form-control'></p>
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