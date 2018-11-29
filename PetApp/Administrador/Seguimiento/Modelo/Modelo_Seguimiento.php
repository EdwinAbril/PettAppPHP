<?php

require_once ("../../../Conexion.php");

class MetodoSeguimiento{
	
	public function MostrarSeguimiento(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from seguimiento";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarSeguimiento($codigo,$postulacion){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call FunModificar_Seguimiento(?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ii',$codigo_p,$postulacion_p);
	$codigo_p=$codigo;
	$postulacion_p=$postulacion;
	$consulta->execute();
	$mensa="Seguimiento Modificado";
	return $mensa;
	}
	
	public function Mostrar_1_Seguimiento($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from seguimiento where codigo_seguimiento='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Seguimiento_1($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from seguimiento where cod_postula='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	

		public function  InsertarSeguimiento($cod){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Seguimiento_1($cod);
		if ($result->num_rows>0) {
			$mensa="El seguimiento ya ha sido realizado";
		
		}
		else{
			$sql="call FunInsertar_Seguimiento(?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('i',$cod_p);
			$cod_p=$cod;
			$consulta->execute();
			$mensa="Seguimiento Ingresado correctamente";
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


}

?>