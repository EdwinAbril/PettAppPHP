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

	public function AceptarCitacion($pos,$men){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call Respuesta_Citacion(?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('is',$pos_p,$men_p);
	$pos_p=$pos;
	$men_p=$men;
	$consulta->execute();
	$mensa="Citacion Aceptada";
	return $mensa;
	}

	public function RechazarCitacion($pos,$men){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call Respuesta_Citacion(?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('is',$pos_p,$men_p);
	$pos_p=$pos;
	$men_p=$men;
	$consulta->execute();
	$mensa="Citacion Rechazada";
	return $mensa;
	}

	public function EliminarFecha($pos){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call Eliminar_Fecha(?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('i',$pos_p);
	$pos_p=$pos;
	$consulta->execute();
	return $mensa;
	}


}
?>