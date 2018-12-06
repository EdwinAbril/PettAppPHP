<?php
require_once ("../../../Conexion.php");
require_once("../Modelo/Modelo_Animal.php");

if(isset($_POST['dato']!=null)){
$resultado=$mostrar->BuscarAnimal('dato');
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
		</div>
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
            <th>".$consulta['tamaño']."</th>
            </tr>
            <th>Genero</th>
            <th>".$consulta['genero']."</th>
            <tr>
            <th>Color</th>
            <th>".$consulta['color']."</th>
            </tr>

    ";
	}
	$tabla.="</table>";
	}
	else{
		$tabla.="No se encontraron los datos";
	}
	echo $tabla;
	
	}
?>