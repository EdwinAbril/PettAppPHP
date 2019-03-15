<?php

require_once ("../../../Conexion.php");

class MetodoCitacion{
	
	public function MostrarCitacion($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from citacion where cedula='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

}
?>