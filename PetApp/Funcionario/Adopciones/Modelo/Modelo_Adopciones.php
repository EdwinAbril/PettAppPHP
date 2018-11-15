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


	public function ModificarAdopcion($codigo,$animal,$seguimiento,$mensaje){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call VetModificar_Adopcion(?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('iiis',$codigo_p,$animal_p,$seguimiento_p,$mensaje);
	$codigo_p=$codigo;
	$animal_p=$animal;
	$seguimiento_p=$seguimiento;
	$mensaje_p=$mensaje;
	$consulta->execute();
	$mensa="Adopcion Modificada";
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
	public function  InsertarAdopciones($coda,$cods,$men){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_adopcion($coda);
		if ($result->num_rows>0) {
			$mensa="La Adopcion ya ha sido realizada";
		
		}
		else{
			$sql="call insertar_usuario_Admin(?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sssi',$ced_p,$nom_p,$cla_p,$rol_p);
			$ced_p=$ced;
			$nom_p=$nom;
			$cla_p=$cla;
			$rol_p=4;
			$consulta->execute();
			$mensa="Usuario del Ciudadano insertado correctamente";
		}
		return $mensa;

	}

}

?>