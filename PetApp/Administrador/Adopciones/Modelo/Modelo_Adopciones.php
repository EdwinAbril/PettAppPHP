<?php

require_once ("../../../Conexion.php");

class MetodoAdopciones{
	
	public function MostrarAdopciones(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from adopcion";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Adopcion($cod){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from adopcion where codigo_adopcion='$cod'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}


	public function ModificarAdopcion($codigo,$animal,$seguimiento){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call VetModificar_Adopcion(?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('iii',$codigo_p,$animal_p,$seguimiento_p);
	$codigo_p=$codigo;
	$animal_p=$animal;
	$seguimiento_p=$seguimiento;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;	
	}

public function EliminarAdopciones($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call VetEliminar_Adopcion('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Adopcion Eliminada";
	return $mensaje; 
}

}

?>