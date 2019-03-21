<?php

require_once ("../../Conexion.php");

class MetodoVeterinaria{
	
	public function MostrarVeterinaria(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from veterinaria";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
}

?>