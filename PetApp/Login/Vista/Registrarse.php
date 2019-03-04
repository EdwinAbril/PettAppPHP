<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PetApp</title>
	
    <link rel="stylesheet" href="css/EstiloRegistro.css">
	<link href="../../Bst/3.3.7/CSS/bootstrap.css" rel="stylesheet">
    <link href="../../Bst/3.3.7/CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../../Bst/3.3.7/CSS/style.css" rel="stylesheet">

    <script src="js/main.js"></script>
    <script src="../../Bst/3.3.7/js/jquery-3.3.1.min.js"></script>
    <script src="../../Bst/3.3.7/js/jquery.min.js"></script>
    <script src="../../Bst/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../Bst/3.3.7/js/scripts.js"></script>
    <script src="../Vista/JS/main.js"></script>
    
</head>

<body background="Imagenes/Registro2.jpg">


	<div id="padre">
    	<div id="insertar" class="form-group">
			<form action="../Controlador/Controlador_Insertar.php" method="Post" enctype="multipart/form-data">
				<label>Nombre de Usuario</label><input type="text" name="usuario" maxlength="15" title="Maximo 15 Caracteres" class="form-control">
	        	<label>Clave</label><input type="password" name="clave" class="form-control" minlength="8" maxlength="20" title="Minimo 8 Caracteres">
	        	<label>Cedula</label><input type="text" name="cedula" pattern="[0-9]{8,10}"  class="form-control">
	    		<label>Nombre</label><input type="text" name="nombre" pattern="[a-z A-Z]{1,30}" class="form-control" >
	    		<label>Celular</label><input type="text" name="telefono" pattern="[0-9]{10}" class="form-control">
	    		<label>Direccion</label><input type="text" name="direccion" class="form-control">
	    		<label>Correo Electronico</label><input type="email" name="correo" class="form-control">
   		        <label>Foto de Perfil</label><div id="padre">
   		        <input type="file" name="imagen" accept="image/png,image/jpeg,image/jpg" id="quitar"></div>

		    		<div class="form-group" id="bot">
			    		<input type="submit" name="consulta" value="Insertar Nuevo Ciudadano"  class="btn btn-primary">
	        		</div>
			</form>
			<?php
	    	if(isset($_POST['consulta'])){
	    	echo "<script type='text/javascript'>;
	    	swal('".$result."');
	    	</script>";
	    	}
			?>
		</div>
	</div>
</body>
</html>
