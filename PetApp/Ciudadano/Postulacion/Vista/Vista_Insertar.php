<!DOCTYPE html>
<html>
<head>
	<title>Postulacion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../../../Bst/4.3.1/CSS/style.css" rel="stylesheet">
    <script src="../../../Bst/4.3.1/js/jquery-3.3.1.min.js"></script>
    <script src="../../../Bst/4.3.1/js/jquery.min.js"></script>
    <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../Bst/4.3.1/js/scripts.js"></script>
</head>
<body id="fondox">
    <?php
        session_start();
        if (!$_SESSION) {
            echo '<script type="text/javascript">
                  alert("Usuario no Autenticado");
                  self.location=../../../Login/Vista/login.php;
                  </script>';  
        }
        else{
            $usuar=$_SESSION["Usuario"];
            $cod=$_SESSION["codi"];
        }
        ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark fixed-top">
               
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="navbar-toggler-icon"></span>
            </button> <a class="navbar-brand" href="../../Login/Vista/login.php">PetApp</a>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav ml-md-auto">
            <a class="navbar-brand" href="">Usuario: <?php echo "".$usuar.""?></a>
            <li class="nav-item dropdown">

                <?php
                require_once("../../Menu/Controlador/Controlador_Usuario.php");
                while($Usu=mysqli_fetch_row($resultado)){
                ?>

                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">

                <?php 
                    echo "<img src='../../../Uploads/Usuarios_Fotos/".$Usu[3]."' class='fotomod' 
                         style='width:50px;height:50px;border-radius:200px 200px;'>";}?></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../../Ciudadano/Vista/Vista_Ciudadano.php">Perfil</a> <a class="dropdown-item" href="#">Respuestas</a><a class="dropdown-item" href="../../Menu/Vista/Ciudadano.php">Menu</a>
                    <div class="dropdown-divider">
                    </div> <a class="dropdown-item" href="../../../Cerrar.php">Cerrar Sesion</a>
                </div>
            </li>
            </ul>
            </div>
            </nav>
            </div>
        </div>
    </div>

    

    <div id="top">
    <div id="ubi">


        <form action="../../Animales/Vista/Vista_Animal.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-light" id="volver">
        </form>

    <div id="insertar" >
	<h1>Postularme</h1>


    <form action="../Controlador/Controlador_Insertar.php" method="Post"  enctype="multipart/form-data">

           </br>
        </br>

        <label>Celular</label><input type="tel" name="telefono" pattern="[0-9]{10}" required="telefono" 
        class="form-control">
    	<label>Direccion</label><input type="text" name="direccion" class="form-control">
    	<label>Telefono Fijo</label><input type="tel" name="fijo" pattern="[0-9]{7}" class="form-control">
        <label>Certificado Laboral</label><input type="file" name="certificado" accept="application/pdf" id="cer" class="form-control-file"> 
         <label>Fotocopia de Cedula</label><input type="file" name="cedulapdf" accept="application/pdf" id="cedp" class="">
         <label>Estrato</label><input type="number" name="estrato" required="estrato" class="form-control">
         <label>Cantidad de personas con las que vive</label><input type="number" name="residentes" required="residentes" id="resi" class="form-control">
         <label>Ubicacion de su vivienda</label><select name="ubicacion" class="form-control" required="">
             <option>Ubicacion</option>
             <option value="Urbano">Urbano</option>
             <option value="Rural">Rural</option>
         </select>
         <label>Tipo de Vivienda</label><select name="vivienda" class="form-control" required="">
             <option>Tipo</option>
             <option value="Casa">Casa</option>
             <option value="Apartamento">Apartamento</option>
             <option value="Finca">Finca</option>
         </select>
         
         <label>Recibo Publico</label><input type="file" name="recibo" accept="application/pdf" id="reci" class="">
        <input type="submit" name="consulta" value="Postularme" class="btn btn-primary">  
    <?php
    require_once("../Controlador/Controlador_Cedula.php");
    while($Ced=mysqli_fetch_row($resultado)){
        echo"
        <input type='hidden' name='cedula' value='".$Ced[0]."'>";
    require_once("../Controlador/Controlador_Respuesta.php");
    while($Res=mysqli_fetch_row($resultado)){
        echo "
        <input type='hidden' name='puntos' value='".$Res[1]."'>";}}
        echo "
        <input type='hidden' name='codi'  value='".$cod."'>";
    
        ?>  
    </form>
</div>

    <?php
        if(isset($_POST['consulta']))
        {
        	echo "<script type='text/javascript'>;
        	swal('".$result."');
        	</script>";
        }
    ?>

</div>
</div>
</body>
</html>