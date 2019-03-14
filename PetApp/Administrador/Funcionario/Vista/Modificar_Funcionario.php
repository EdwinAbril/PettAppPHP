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
    <title>Funcionario</title>
</head>
<body id="fondox">
    <form action="../Vista/Vista_Funcionario.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="modificar" class="form-group">
            <?php
            $cod=$_POST["cod"];
            ?>
            <h1>Funcionario</h1>
            <p>Cedula</p><p><?php echo $cod?></p>
            <?php
            require_once("../Controlador/Controlador_Modificar_Funcionario.php");
            while($Fun=mysqli_fetch_row($resultado)){
                echo "
                    <form action='../Controlador/Controlador_Actualizar_Funcionario.php' method='Post'>
                        <input type='hidden' name='cod' value='".$Fun[0]."'>   
                        <p><label>Telefono</label><input type='text' name='telefono' value='".$Fun[1]."' class='form-control'></p>
                        <p><label>Nombre</label><input type='text' name='nombre'  value='".$Fun[2]."' class='form-control'></p>
                        <p><label>Correo</label><input type='text' name='correo'  value='".$Fun[3]."' class='form-control'></p>
                        <p><label>Dependencia</label><input type='text' name='dependencia' value='".$Fun[5]."' class='form-control'></p>
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