<?php
require_once ("../../../Conexion.php");
require_once("../Modelo/Modelo_Animal.php");
$mostrar= new MetodoAnimal();
if(isset($_POST['dato']!=null)){
$resultado=$mostrar->BuscarAnimal();
}
function BuscarAnimal(){

$conectar= new conectarproyecto();
$conexion= $conectar->conexion();
$tabla="";
$mostrar= new MetodoAnimal();
$query=$mostrar->MostrarAnimal();
if(isset($_POST['dato'])){
	$datos=$conexion->real_escape_string($_POST['dato']);
	$query=$mostrar->BuscarAnimal($datos);
}
if ($query->num_rows>0) {
	while ($consulta=$query->fetch_assoc()) {
		$tabla.= "
		<div id='centro'>
            <div class='caja1'>
            <table class='table'>
            <tr>
            <thead class='thead-dark'>
            <th>".$consulta['nombre_animal']."</th>
            </thead>
            </tr>
            </table>
		<tr>
		
		<div class='caja2'>
            <table class='table'>
            <tr>
            <th>Codigo</th>
            <th>".$consulta['codigo_animal']."</th>
            </tr>
            <tr>
            <th>Nombre</th>
            <th>".$consulta['nombre_animal']."</th>
            </tr>
            <tr>
            <th>Tipo</th>            
            <th>".$consulta['tipo_animal']."</th>
            </tr>
            <tr>
            <th>Edad</th>
            <th>".$consulta['edad_animal']."</th>
            </tr>
            <tr>
            <th>Raza</th>
            <th>".$consulta['raza_animal']."</th>
            </tr>
            <th>Foto</th>
            <th><img src='../../../Uploads/Animales_fotos/".$consulta['foto']."' width='200' heigth='200'></th>
            </tr>
            <th>Tamaño</th>
            <th>".$consulta['tamano']."</th>
            </tr>
            <th>Genero</th>
            <th>".$consulta['genero']."</th>
            <tr>
            <th>Color</th>
            <th>".$consulta['color']."</th>
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
            </div>
            </div>
            </div>
            ";
	}
	$tabla.="</table>";
	}
      echo "</div>";
	else{
		$tabla="No se encontraron los datos";
	}
	echo $tabla;
	
	}
?>