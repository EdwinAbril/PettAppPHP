<?php

require_once ("../../../Conexion.php");

class MetodoNotificaciones{
	
	public function MostrarCedula($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select cedula from ciudadano where usuario_ciu='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
		
	public function MostrarRespuestas($ced){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from respuestausuario where cedula_respuesta='$ced'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}


}
?>