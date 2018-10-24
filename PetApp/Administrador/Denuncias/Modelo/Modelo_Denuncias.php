<?php

require_once ("../../../Conexion.php");

class MetodoDenuncias{
	
	public function MostrarDenuncias(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from denuncia";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Denuncia($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from denuncia where codigo_denuncia='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarDenuncias($codigo,$fecha,$descripcion,$cedula){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call VetModificar_Denuncias(?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('isss',$codigo_p,$fecha_p,$descripcion_p,$cedula_p);
	$codigo_p=$codigo;
	$fecha_p=$fecha;
	$descripcion_p=$descripcion;
	$cedula_p=$cedula;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;
	}

public function EliminarDenuncias($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call FunEliminar_Denuncia('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Denuncia Eliminada";
	return $mensaje; 
}

}

?>