<!DOCTYPE html>
<html>
<head>
	<title>Animal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../Vista/JS/jquery-3.3.1.min.js"></script>
    <script src="../Vista/JS/main.js"></script>

</head>
<body>
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
                  <a class="navbar-brand" href="#">Usuario: <?php echo "".$usuar.""?></a>
                  <li class="nav-item dropdown">
                      <?php
                      require_once("../../Menu/Controlador/Controlador_Usuario.php");
                      while($Usu=mysqli_fetch_row($resultado)){
                      ?>
                     <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">
                      <?php echo "
                      <img src='../../../Uploads/Usuarios_Fotos/".$Usu[3]."' class='fotomod' 
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
	  <form action="../../Menu/Vista/Ciudadano.php">
    <input type="submit" name="volver" value="Menu" class="btn btn-outline-dark" id="voler">
    </form>
    <div id="ubi">
    <h1 class="display-4">Animal</h1>

    <?php
    
    require_once("../Controlador/Controlador_Consultar.php");
    ?>    
    <div id="centro1">
      <div id="caja0">
    <form action="" method="POST">
    <input type="text" name="xraza">
    <select name="xgenero">
      <option value="">Genero</option>
      <option value="Macho">Macho</option>
      <option value="Hembra">Hembra</option>
    </select>
    <select name="xtamano">
      <option value="">Tamaño</option>
      <option value="Grande">Grande</option>
      <option value="Mediano">Mediano</option>
      <option value="Pequeño">Pequeño</option>
    </select>
    <input type="submit" name="buscar">
    </form>
      </div>
    </div>


    <?php
    
    require_once("../Modelo/Modelo_Animal.php");
    $mostrar= new MetodoAnimal();
    

    if (isset($_POST['buscar'])){

      $where="";
      $raza=$_POST['xraza'];
      $genero=$_POST['xgenero'];
      $tamano=$_POST['xtamano'];
      echo '<script type="text/javascript">
          alert("'.$raza.'");
          alert("'.$genero.'");
        alert("'.$tamano.'");     
          </script>';
      if ((empty($_POST['xraza']))&&(empty($_POST['xtamano']))&&(empty($_POST['xgenero']))){
        $where="";
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("0");
          </script>';
      }
      else if ((empty($_POST['xraza']))&&(empty($_POST['xgenero']))){
        $where="where tamano='".$tamano."'";
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("1");
          </script>'; 
      }
      else if ((empty($_POST['xraza']))&&(empty($_POST['xtamano']))){
        $where="where genero='".$genero."'";
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("2");
          </script>';
      }
      else if ((empty($_POST['xgenero']))&&(empty($_POST['xtamano']))){
        $where="where raza_animal='".$raza."'";
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("3");
          </script>';
      }
      else if (empty($_POST['xraza'])){
        $where="where tamano='".$tamano."' and genero='".$genero."'";
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("4");
          </script>';
      }
      else if (empty($_POST['xtamano'])){
        $where="where raza_animal ='".$raza."' and genero='".$genero."'";
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("5");
          </script>';
      }
      else if (empty($_POST['xgenero'])){
        $where="where raza_animal ='".$raza."' and tamano='".$tamano."'";
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("6");
          </script>';
      }
      
      else{
        $where="where raza_animal ='".$raza."' and tamano='".$tamano."' and genero='".$genero."'";
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("7");
          </script>';
      }

    }
    else{
      $where="";
      
      echo '<script type="text/javascript">
            alert("8");
            </script>';
    }

    $resultado=$mostrar->MostrarAnimal($where);

    ?>

    <?php
    while($Ani=mysqli_fetch_row($resultado)){
    ?>
   
		<div id="centro">
        <div class="caja1">
		<?php
		echo "
		<table class='table'>
            <tr>
            <thead class='thead-dark'>
            <th>".$Ani[1]."</th>
            </thead>
            </tr>
            </table>
		<tr>";
		?>
		</div>
		<div class='caja2'>
            <table class='table'>
        <?php
        echo "
            <tr>
            <th>Codigo</th>
            <th>".$Ani[0]."</th>
            </tr>
            <tr>
            <th>Nombre</th>
            <th>".$Ani[1]."</th>
            </tr>
            <tr>
            <th>Tipo</th>            
            <th>".$Ani[2]."</th>
            </tr>
            <tr>
            <th>Edad</th>
            <th>".$Ani[3]."</th>
            </tr>
            <tr>
            <th>Raza</th>
            <th>".$Ani[4]."</th>
            </tr>
            <tr>
            <th>Tamaño</th>
            <th>".$Ani[6]."</th>
            </tr>
            <tr>
            <th>Genero</th>
            <th>".$Ani[7]."</th>
            <tr>
            <th>Color</th>
            <th>".$Ani[8]."</th>
            </tr>
            <tr>
				
		";
		?>
        <?php
        echo "
                 <form method='POST' action='../Controlador/Controlador_Enlace.php'>
                            <input type='text' name='codi' value='".$Ani[0]."'>
                            <input type='hidden' name='usu' value='".$usuar."'>
                  <input type='submit' name='readop' heigth='100px' width='100px' src='Imagenes/adoptame.png' class='img-responsive slideanim' id='logoadopta'  >
                  <h1>Adoptame</h1>
                
                

                <p><img src='../../../Uploads/Animales_fotos/".$Ani[5]."' width='300px' heigth='300px'></p>";

        ?>
	
	</form>
	</table>
    </div>
    </div>
	<?php
	}
	
	if(isset($_POST['eliminar'])){
		echo"<script type='text/javascript'>;
		alert('".$resulta."');
		</script>";

	}
	echo "</table>";

?>

</div>
</div>
</body>
</html>