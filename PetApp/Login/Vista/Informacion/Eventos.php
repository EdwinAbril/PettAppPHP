<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
  <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
  <script src="../../../Bst/4.3.1/js/scripts.js"></script>
  <link rel="stylesheet" href="CSS/Estilos.css">
  <script src="JS/jquery-3.3.1.min.js"></script>
  <script src="JS/main.js"></script>

	<title>Veterinarias</title>
</head>
<body>
	<form action="../login.php" method="post" id="volver">
        <input type="submit" name="inicio" value="Inicio" class="btn btn-light" id="volver">
	</form>

<header><img src="Eventos2.jpeg" id="imagen"></header> 

<h1 id="Texto">Eventos o Jornadas</h1>
	<?php
        require_once("../../Controlador/Controlador_Eventos.php");
        while($Eve=mysqli_fetch_row($resultado)){
            echo "
                <div id='centro'>
                    <div class='caja1'>
                        <table class='table'>
                            <thead class='thead-dark'>
                                <tr>
                                    <th>".$Eve[2]."</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class='caja2'>
                        <table class='table'>
                            <tr>
                                <th>Codigo</th>
                                <th>".$Eve[0]."</th>
                            </tr>
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
                            <tr>
                                <th colspan=2><img src='../../../Uploads/Eventos_fotos/".$Eve[5]."' width='300' heigth='300'></th>
                            </tr>
                        </table>
                    </div>
                </div>
            ";
        }
        
        ?>
</body>
</html>


