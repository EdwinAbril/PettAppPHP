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

	public function Mostrar_1_Evento($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from jornada where codigo_jornada='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarEventos($codigo,$fecha,$lugar,$duracion,$descripcion){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call FunModificar_Eventos(?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('issss',$codigo_p,$fecha_p,$lugar_p,$duracion_p,$descripcion_p);
	$codigo_p=$codigo;
	$fecha_p=$fecha;
	$lugar_p=$lugar;
	$duracion_p=$duracion;
	$descripcion_p=$descripcion;
	$consulta->execute();
	$mensa="Evento Modificado";
	return $mensa;
	}

	public function EliminarEventos($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call FunEliminar_Eventos('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Eventos Eliminada";
	return $mensaje; 
}

}

?>