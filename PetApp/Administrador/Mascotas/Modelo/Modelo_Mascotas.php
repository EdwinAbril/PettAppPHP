<?php

require_once ("../../../Conexion.php");

class MetodoMascotas{
	
	public function MostrarMascotas(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from mascota";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Mascota($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from mascota where codigo_mascota='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarMascotas($codigo,$nombre,$descendencia,$estado,$tipo,$edad,$raza,$cedula){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call usuario_mascota_actu(?,?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('isssssss',$codigo_p,$nombre_p,$descendencia_p,$estado_p,$tipo_p,$edad_p,$raza_p,$cedula_p);
	$codigo_p=$codigo;
	$nombre_p=$nombre;
	$descendencia_p=$descendencia;
	$estado_p=$estado;
	$tipo_p=$tipo;
	$edad_p=$edad;
	$raza_p=$raza;
	$cedula_p=$cedula;
	$consulta->execute();
	$mensa="Mascota Modificada";
	return $mensa;
	}

	public function EliminarMascotas($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call usuario_mascota_elim('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Mascota Eliminada";
	return $mensaje; 
}

}

?>