<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PetApp</title>
	
    <link rel="stylesheet" href="../Vista/css/EstiloRegistro.css">
	<link href="../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
	<link href="../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
	<link href="../../Bst/4.3.1/CSS/style.css" rel="stylesheet">
	<script src="../../Bst/4.3.1/js/jquery.min.js"></script>
	<script src="../../Bst/4.3.1/js/bootstrap.min.js"></script>
	<script src="../../Bst/4.3.1/js/scripts.js"></script>
	<script src="../Vista/JS/main.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>

<body background="../Vista/Imagenes/Registro2.jpg">


	<div id="padre">
    	<div id="insertar" class="form-group">
			<form action="../Controlador/Controlador_Insertar.php" method="Post" enctype="multipart/form-data">
				<label>Nombre de Usuario</label>
					<input type="text" name="usuario" maxlength="15" title="Maximo 15 Caracteres" class="form-control">
	        	<label for="clave" class="form-label">Contraseña</label>
	        		<input type="password" class="form-control" name="clave" id="clave" required="" minlength="8" maxlength="20" title="Minimo 8 Caracteres">
	        	<label for="confirmar" class="form-label">Confirmar Contraseña</label>
	        		<input type="password" class="form-control" name="confirmar" id="confirmar" required="" minlength="8" maxlength="20" title="Minimo 8 Caracteres">
	        	<label>Cedula</label><input type="text" name="cedula" pattern="[0-9]{8,10}"  class="form-control">
	    		<label>Nombre</label><input type="text" name="nombre" pattern="[a-z A-Z]{1,30}" class="form-control" >
	    		<label>Celular</label><input type="text" name="telefono" pattern="[0-9]{10}" class="form-control">
	    		<label>Direccion</label><input type="text" name="direccion" class="form-control">
	    		<label>Correo Electronico</label><input type="email" name="correo" class="form-control">
   		        <label>Foto de Perfil</label><div id="padre">
   		        <input type="file" name="imagen" id="quitar" accept="image/png,image/jpeg,image/jpg" class="form-control-file" ></div>

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
