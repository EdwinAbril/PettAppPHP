<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PetApp</title>
	
    <link rel="stylesheet" href="css/EstiloRegistro.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>

<body background="Imagenes/Registro2.jpg">


	<div id="padre">
    	<div id="insertar" class="form-group">
			<form action="../Controlador/Controlador_Insertar.php" method="Post">
				<label>Nombre de Usuario</label><input type="text" name="usuario" class="form-control">
	        	<label>Clave</label><input type="password" name="clave" class="form-control">
	        	<label>Cedula</label><input type="number" name="cedula" class="form-control">
	    		<label>Nombre</label><input type="text" name="nombre" class="form-control">
	    		<label>Telefono</label><input type="number" name="telefono" class="form-control">
	    		<label>Direccion</label><input type="text" name="direccion" class="form-control">
	    		<label>Correo Electronico</label><input type="text" name="correo" class="form-control">
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
