<?php

require_once ("../../../Conexion.php");

class MetodoPostulacion{
	
	public function MostrarPostulacion(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from postulacion";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarPostulacion($codigo,$telefono,$direcion,$telfij,$certificado,$cedula){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call usuario_postulacion_actu(?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('isssss',$codigo_p,$telefono_p,$direcion_p,$telfij_p,$certificado_p,$cedula_p);
	$codigo_p=$codigo;
	$telefono_p=$telefono;
	$direcion_p=$direcion;
	$telfij_p=$telfij;
	$certificado_p=$certificado;
	$cedula_p=$cedula;
	$consulta->execute();
	$mensa="Postulacion Modificada";
	return $mensa;
	}

	public function Mostrar_1_Postulacion($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from postulacion where codigo_postulacion='$to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
	
	public function Mostrar_1_Postulacion_1($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from postulacion where cedu='to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}


	public function InsertarPostulacion($tc,$dc,$tf,$cer,$ced,$cod){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Postulacion_1($ced);
	
		if ($result->num_rows>0) {
			$mensa="La Postulacion ya ha sido realizada";
		}
		else{
		$sql="call usuario_postulacion_inser(?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sssssi',$tc_p,$dc_p,$tf_p,$cer_p,$ced_p,$cod_p);
			$tc_p=$tc;
			$dc_p=$dc;
			$tf_p=$tf;
			$cer_p=$cer;
			$ced_p=$ced;
			$cod_p=$cod;
			$consulta->execute();
			$mensa="Postulacion Realizada";
		}
		return $mensa;
	}
}

?>