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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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

    <form action="Vista_insertar.php">
        <input type="submit" name="nuevo" value="Insertar" class="btn btn-outline-dark" id="nuevo">
    </form>
    
    <form action="../../Menu/Vista/Administrador.php">
        <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
    </form>

    

    <form action="../../../Cerrar.php">
        <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
    </form>

    <h1 class="display-4">Animal</h1>

    
    <div class="form-1-2">
        <label for="caja_busqueda">Buscar:</label>
        <input type='text' name='caja_busqueda' class='caja_busqueda' placeholder="Busqueda por Color">
    </div>
    
    <?php

$mysqli= new  mysqli("localhost","root","","proyecto");
$salida= "";
$query = "select * from animal";

if (isset($_POST['consulta'])) {
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "select * from animal where nombre_animal like '%".$q."%'";
}
$resultado= $mysqli->query($query);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado -> fetch_assoc()) {   
    $salida.="
    <div id='centro'>
    	<div class='tabla'>
        <div class='caja1'>
        <table class='table'>
            <tr>
            <thead class='thead-dark'>
            <th>".$fila['nombre_animal']."</th>
            </thead>
            </tr>
            </table>
        <tr>
        
        <div class='caja2'>
            <table class='table'>
            <tr>
            <th>Codigo</th>
            <th>".$fila['codigo_animal']."</th>
            </tr>
            <tr>
            <th>Nombre</th>
            <th>".$fila['nombre_animal']."</th>
            </tr>
            <tr>
            <th>Tipo</th>            
            <th>".$fila['tipo_animal']."</th>
            </tr>
            <tr>
            <th>Edad</th>
            <th>".$fila['edad_animal']."</th>
            </tr>
            <tr>
            <th>Raza</th>
            <th>".$fila['raza_animal']."</th>
            </tr>
            <th>Foto</th>
            <th><img src='../../../Uploads/Animales_fotos/".$fila['foto']."' width='200' heigth='200'></th>
            </tr>
            <th>Tamaño</th>
            <th>".$fila['tamano']."</th>
            </tr>
            <th>Genero</th>
            <th>".$fila['genero']."</th>
            <tr>
            <th>Color</th>
            <th>".$fila['color']."</th>
            </tr>
            <tr><form method='POST' action='Modificar_Animal.php'>
            <input type='hidden' name='usu' value='".$fila['codigo_animal']."'>
            <th><input type='submit' name='modificar' value='Modificar' class='btn btn-info'></th>
            </form>

            <form method='POST' action='../Controlador/Eliminar_Animal.php'>
            <input type='hidden' name='cdani' value='".$fila['codigo_animal']."'>
            <th><input type='submit' name='eliminar' value='Eliminar' class='btn btn-danger'></th>
            </form>
            </tr>
            </table>
            </div>
            </div>
            </div>
            ";
        }

$salida.= "</table>";
}
else{
    $salida.="No hay datos";
}

echo $salida;

$mysqli->close();
?>
</body>
</html>