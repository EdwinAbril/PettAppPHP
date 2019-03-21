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
    <title>Eventos</title>
</head>
<body id="fondox">
    <form action="../Vista/Vista_Eventos.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="modificar" class="form-group">
            <?php
            $cod=$_POST["usu"];
            ?>
            <h1>Eventos</h1>
            <p>Codigo</p><?php echo $cod?><BR>
            <?php
            require_once("../Controlador/Controlador_Modificar_Eventos.php");
            while($Eve=mysqli_fetch_row($resultado)){
                echo "
                    <form action='../Controlador/Controlador_Actualizar_Eventos.php' method='Post' enctype='multipart/form-data'>
                        <div id='centro'>   
                            <p>Foto</p><label class='botonModi'>
                            <img src='../../../Uploads/Eventos_fotos/".$Eve[5]."' style='width:150px;height:150px;border-radius: 150px;' id='fotomod'>
                            <input type='file' class='file' name='fo' accept='image/jpeg,image/png'>
                            <img src='../Vista/Imagenes/Icono.png' width='40' heigth='40'></label>
                        </div>
                        <input type='hidden' name='usu' value='".$Eve[0]."'>   
                        <input type='hidden' name='fotosi' value='".$Eve[5]."'>   
                        <p><label>Fecha</label><input type='date' name='fec'  value='".$Eve[1]."' class='form-control'></p>
                        <p><label>Lugar</label><input type='text' name='lug'  value='".$Eve[2]."' class='form-control'></p>
                        <p><label>Hora</label><input type='time' name='dur'  value='".$Eve[3]."' class='form-control'></p>
                        <p><label>Descripcion</label><input type='text' name='des'  value='".$Eve[4]."' class='form-control'></p>
                        <input type='submit' name='botonfunci' value='Modificar' class='btn btn-primary'>
                    </form>
                ";
            }

if(isset($_POST['botonfunci'])){
echo"<script type='text/javascript'>;
swal('".$result."');
</script>";

}

?>
</div>
</div>

</body>
</html>