<?php

require_once ("../../../Conexion.php");

class MetodoEventos{
	
	public function MostrarEventos(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from jornada";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

}

?>