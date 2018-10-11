<?php

require_once ("../../../Conexion.php");

class MetodoAnimal{
	
	public function MostrarAnimal(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from animal";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Animal($cod){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from animal where codigo_animal='$cod'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarAnimal($codigo,$nombre,$tipo,$edad,$raza){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call VetModificar_Animal(?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('issss',$codigo_p,$nombre_p,$tipo_p,$edad_p,$raza_p);
	$codigo_p=$codigo;
	$nombre_p=$nombre;
	$tipo_p=$tipo;
	$edad_p=$edad;
	$raza_p=$raza;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;
	}
}

?>