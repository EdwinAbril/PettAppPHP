<!DOCTYPE html>
<html>
<head>
	<title>Animal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/main.js"></script>

</head>
<body>


<div name="tabla">
	<form action="../../Ciudadano/Menu/Ciudadano.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="voler">
    </form>

    <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
    <center><h1 class="display-4">Animal</h1></center>

    <?php
    
	require_once("../Controlador/Controlador_Consultar.php");
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
            <th>Foto</th>
            <th><img src='../../../Animales_fotos/".$Ani[5]."' width='30' heigth='30'></th>
            </tr>
            <th>Tamaño</th>
            <th>".$Ani[6]."</th>
            </tr>
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
                 <form method='POST' action='../../Postulacion/Vista/Vista_Insertar.php'>
                            <input type='hidden' name='xp' value='".$Ani[0]."'>
                  <input type='image' name='readop' heigth='100px' width='100px' src='Imagenes/adoptame.png' class='img-responsive slideanim' id='logoadopta'  >
                  <h1>Adoptame</h1>
                
                </form>"
        ?>
	
	
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
</body>
</html>