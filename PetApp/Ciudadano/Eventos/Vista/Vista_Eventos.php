<!DOCTYPE html>
<html>
<head>
	<title>Eventos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/Estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/main.js"></script>

</head>
<body>
    <form action="../../Ciudadano/Menu/Ciudadano.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
  	</form>
  
    <h1 class="display-4">Eventos</h1>
<?php
require_once("../Controlador/Controlador_Eventos.php");
while($Eve=mysqli_fetch_row($resultado)){
echo "
		<div id='centro'>
        <div class='caja1'>
					
					
                    <table class='table'>
                    <tr>
                    <thead class='thead-dark'>
                    <th>".$Eve[2]."</th>
                    </thead>
                    </tr>
                    </table>
                    
				</div>
				<div class='caja2'>
                    <table class='table'>
                    <tr>
                   
                        <tr>
                        <th>Fecha</th>
                        <th>".$Eve[1]."</th>
                        </tr>
                        <tr>
                        <th>Lugar</th>
                        <th>".$Eve[2]."</th>
                        </tr>
                        <tr>
                        <th>Hora</th>
                        <th>".$Eve[3]."</th>
                        </tr>
                        <tr>
                        <th>Descripcion</th>
                        <th>".$Eve[4]."</th>
                        </tr>
                       
				</table>
                </div>
                </div>
                ";
				}
				if(isset($_POST['eliminar'])){
					echo"<script type='text/javascript'>;
					alert('".$resulta."');
					</script>";

				}

		?>

</body>
</html>