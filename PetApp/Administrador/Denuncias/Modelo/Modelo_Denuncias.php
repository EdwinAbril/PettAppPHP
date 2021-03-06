<?php

require_once ("../../../Conexion.php");

class MetodoDenuncias{
		
	public function Mostrar_1_positivo($pos){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$sql="select * from respuestausuario where codigo_positivo='$pos'";
		$consulta=mysqli_query($conexion,$sql);
		return $consulta;
	}
	public function InsertarPositivo($icon,$cep,$men,$enc){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_positivo($cep);
		if($result->num_rows>0){
			$mensa="No es posible enviar la respuesta";
		}
		else{
			$sql="call inser_respuesta_positiva(?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssss',$icon_p,$ce_p,$men_p,$enc_p);
			$icon_p=$icon;
			$ce_p=$cep;
			$men_p=$men;
			$enc_p=$enc;
			$consulta->execute();
			$mensa="Respuesta enviada";
		}
		return $mensa;
	}
	
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