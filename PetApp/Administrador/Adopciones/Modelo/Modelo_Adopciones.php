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


	public function  InsertarAdopciones($coda,$ced,$men){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_adopcion($coda);
		if ($result->num_rows>0) {
			$mensa="La Adopcion ya ha sido realizada";
		
		}
		else{
			$sql="call VetInsertar_Adopcion(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('iss',$coda_p,$ced_p,$men_p);
			$coda_p=$coda;
			$ced_p=$ced;
			$men_p=$men;
			$consulta->execute();
			$mensa="Proceso Finalizado correctamente";
		}
		return $mensa;

	}
		public function EliminarSeguimiento($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call FunEliminar_Seguimiento('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Seguimiento Eliminado";
	return $mensaje; 
}

	public function EliminarPostulacion($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion(); 
	$sql="call usuario_postulacion_elim('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Postulacion Eliminada";
	return $mensaje; 
}

	public function EliminarAnimal($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call bor_animal_Admin('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Proceso Finalizado";
	return $mensaje; 
}


}

?>