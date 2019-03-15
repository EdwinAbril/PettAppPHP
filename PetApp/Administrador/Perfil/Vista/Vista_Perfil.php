<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
  <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
  <script src="../../../Bst/4.3.1/js/scripts.js"></script>
  <link rel="stylesheet" href="CSS/Estilos.css">
  <script src="JS/jquery-3.3.1.min.js"></script>
  <script src="JS/main.js"></script>
  <script type="text/javascript">history.forward();</script>
</head>

<body>
	<?php
  	session_start();
  	if (!$_SESSION) {
    echo '<script type="text/javascript">
          alert("Usuario no Autenticado");
          location="../../../Login/Vista/login.php";
          </script>';  
  	}
  	else{
    $usuar=$_SESSION["Usuario"];
    }
  ?>

	<form action="../../Menu/Vista/Administrador.php">
  		<input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
	</form>
  
  <form action="../../../Cerrar.php">
  	<input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
  </form>

	<h3 class="display-4">Perfil</h3>
	
		<?php
		require_once("../Controlador/Controlador_Perfil.php");
		while($Adm=mysqli_fetch_row($resultado)){
		?>
		<div id="centro">
        <div class="caja1">
  				<?php
  					echo '
              <table class="table">
                <tr>
                <thead class="thead-dark">
                <th>'.$Adm[0].'</th>
                </thead>
                </tr>
              </table>
          	';
  				?>
				</div>
				<div class='caja2'>
          <?php
          echo "
              <table class='table'>
                <tr>
                  <th>Usuario</th>
                  <th>".$Adm[0]."</th>
                  </tr>
                  <tr>
                  <th>Clave</th>
                  <th>".$Adm[1]."</th>
                </tr>
                <tr>
                  <th>Foto</th>
            			<th><img src='../../../Uploads/Usuarios_Fotos/".$Adm[3]."' width='200' heigth='200'></th>
          			</tr>
                <tr>
  								<form method='POST' action='Modificar_Perfil.php'>
          					<input type='hidden' name='usu' value='".$Adm[0]."'>
        	   				<th colspan='2'><input type='submit' name='modificar' value='Modificar' class='btn btn-info'></th>
        					</form>
                </tr>
              </table>
            ";
          ?>
        </div>
    </div>
		<?php }
			if(isset($_POST['eliminar'])){
				echo"<script type='text/javascript'>;
				alert('".$resulta."');
				</script>";
    	}
		?>
</body>
</html>