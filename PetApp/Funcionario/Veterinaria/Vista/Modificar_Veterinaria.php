<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="Estilomod.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Veterinaria</title>
</head>
<body id="fondox">
    <form action="../Vista/Vista_Veterinaria.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="vol">
    </form>
    <div id="padre">
        <div id="modificar" class="form-group">
            <?php
            $cod=$_POST["usu"];
            ?>
            <h1>Veterinaria</h1>
            <p>Nit</p><p><?php echo $cod?></p>
            <?php
            require_once("../Controlador/Controlador_Modificar_Veterinaria.php");
            while($Vet=mysqli_fetch_row($resultado)){
                echo "
                    <form action='../Controlador/Controlador_Actualizar_Veterinaria.php' method='Post'>
                        <input type='hidden' name='usu' value='".$Vet[0]."'>   
                        <p><label>Telefono</label><input type='text' name='tel' value='".$Vet[1]."' class='form-control'></p>
                        <p><label>Nombre</label><input type='text' name='nom' value='".$Vet[2]."' class='form-control'></p>
                        <p><label>Direccion</label><input type='text' name='dir' value='".$Vet[3]."' class='form-control'></p>
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