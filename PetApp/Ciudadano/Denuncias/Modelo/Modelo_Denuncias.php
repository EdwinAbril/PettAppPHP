<?php

require_once ("../../../Conexion.php");

class MetodoDenuncias{
	
	public function MostrarCedula($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select cedula from ciudadano where usuario_ciu='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
	
	public function MostrarFecha(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select curdate();";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function MostrarDenuncias($ced){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from denuncia where cedul_ciudadano='$ced'";
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
	$mensa="Denuncia Modificada";
	return $mensa;
	}

public function EliminarDenuncias($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call VetEliminar_Denuncia('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Denuncia Eliminada";
	return $mensaje; 
}

	public function Mostrar_1_Denuncia_1($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from denuncia where codigo_denuncia='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
		public function InsertarDenuncias($fec,$des,$ced,$men,$fot){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Denuncia_1($men);
		if ($result->num_rows>0 && $resulta->num_rows>0 && $resultad->num_rows>0 && $resultado->num_rows>0) {
			$mensa="La Denuncia ya ha sido realizada";
		}
		else{
		$sql="call VetInsertar_Denuncias(?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sssss',$fec_p,$des_p,$ced_p,$men_p,$fot_p);
			$fec_p=$fec;
			$des_p=$des;
			$ced_p=$ced;
			$men_p=$men;
			$fot_p=$fot;
			$consulta->execute();
			$mensa="Denuncia Realizada";
		}
		return $mensa;
	}

}

?>