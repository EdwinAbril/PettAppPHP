<?php

require_once ("../../../Conexion.php");

class MetodoPreguntas{

	public function Preguntas1($u){
		$conectar= new conectarproyecto();
		$conexion= $conectar->conexion();
		$sql="select cedula from ciudadano where usuario_ciu='$u'";
		$consulta=$conexion->query($sql);
		return $consulta;
	}

	public function Preguntas($c){
		$conectar= new conectarproyecto();
		$conexion= $conectar->conexion();
		$sql="select * from respuesta_pre where cedula='$c'";
		$consulta=$conexion->query($sql);
		return $consulta;
	}
}
?>