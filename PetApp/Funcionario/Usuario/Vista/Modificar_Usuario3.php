<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Estilomod.css">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Usuario Ciudadano</title>
</head>
<body id="fondox">
    <form action="../../Veterinaria/Vista/Vista_Veterinaria.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="modificar" class="form-group">
            <?php
            $cod=$_POST["usu"];
            ?>
            <h1>Usuario Ciudadano</h1>
            <p>Usuario</p><p><?php echo $cod?></p>
            <?php
            require_once("../Controlador/Controlador_Modificar_Usuario3.php");
            while($Usu=mysqli_fetch_row($resultado)){
                echo "
                    <form action='../Controlador/Controlador_Actualizar_Usuario3.php' method='Post' enctype='multipart/form-data'>
                        <div id='centro'>   
                            <p>Foto</p><label class='botonModi'>
                            <img src='../../../Uploads/Usuarios_Fotos/".$Usu[3]."' style='width:150px;height:150px;border-radius: 150px;' id='fotomod'>
                            <input type='file' class='file' name='fo' accept='image/jpeg,image/png'>
                            <img src='../Vista/Imagenes/Icono.png' width='40' heigth='40'></label>
                        </div>
                        <input type='hidden' name='usu' value='".$Usu[0]."'>
                        <input type='hidden' name='fotosi' value='".$Usu[3]."'>   
                        <p>
                            <label for='clave' class='form-label'>Clave</label>
                            <input type='password' class='form-control' name='clave' id='clave' value='".$Usu[1]."' required='' minlength='8' axlength='20' title='Minimo 8 Caracteres'>
                        </p>
                        <p>
                            <label for='confirmar' class='form-label'>Confirmar Contraseña</label>
                            <input type='password' class='form-control' name='confirmar' id='confirmar' value='".$Usu[1]."' required='' minlength='8' maxlength='20' title='Minimo 8 Caracteres'>
                        </p>
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