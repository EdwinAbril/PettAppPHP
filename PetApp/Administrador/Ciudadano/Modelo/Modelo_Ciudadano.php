<?php

require_once ("../../../Conexion.php");

class MetodoCiudadano{
	
	public function MostrarCiudadano(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from ciudadano";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Ciudadano($ced){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from ciudadano where cedula='$ced'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarCiudadano($cedula,$nombre,$telefono,$direccion,$correo){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call act_usuario_Admin(?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('sssss',$cedula_p,$nombre_p,$telefono_p,$direccion_p,$correo_p);
	$cedula_p=$cedula;
	$nombre_p=$nombre;
	$telefono_p=$telefono;
	$direccion_p=$direccion;
	$correo_p=$correo;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;
	}
}

?>