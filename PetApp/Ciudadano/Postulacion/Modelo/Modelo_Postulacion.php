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

	public function MostrarCedula($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select cedula from ciudadano where usuario_ciu='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarPostulacion($telefono,$direcion,$telfij,$certificado,$cedula,$codigo){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call usuario_postulacion_actu(?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('isssss',$telefono_p,$direcion_p,$telfij_p,$certificado_p,$cedula_p,$codigo_p);
	$telefono_p=$telefono;
	$direcion_p=$direcion;
	$telfij_p=$telfij;
	$certificado_p=$certificado;
	$cedula_p=$cedula;
	$codigo_p=$codigo;
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
	}

	
		public function  Insertarpostulacion($tel,$dir,$fij,$cl,$cpdf,$es,$re,$ub,$tv,$res,$ce,$ca){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_postulacion($ce);

		if ($result->num_rows>0) {
			$mensa="La postulacion ya ha sido realizada";
		
		}
		else{
			$sql="call usuario_postulacion_inser(?,?,?,?,?,?,?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sssssiissisi',$tel_p,$dir_p,$fij_p,$cl_p,$cpdf_p,$es_p,$re_p,$ub_p,$tv_p,$res_p,$ce_p,$ca_p);
			$tel_p=$tel;
			$dir_p=$dir;
			$fij_p=$fij;
			$cl_p=$cl;
			$cpdf_p=$cpdf;
			$es_p=$es;
			$re_p=$re;
			$ub_p=$ub;
			$tv_p=$tv;
			$res_p=$res;
			$ce_p=$ce;
			$ca_p=$ca;
			$consulta->execute();
			$mensa="Postulacion realizada correctamente";
		}
		return $mensa;

	}

	public function EliminarPostulacion($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion(); 
	$sql="call usuario_postulacion_elim('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Postulacion Eliminada";
	return $mensaje; 
}

}

?>