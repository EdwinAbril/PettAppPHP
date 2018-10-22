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
<<<<<<< HEAD

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
=======
	public function Mostrar_1_postulacion($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from postulacion where cedu='$usu'";
>>>>>>> 7254ff85cb5e6f6df9644027a54020ba6136890b
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

<<<<<<< HEAD

	public function InsertarPostulacion($tc,$dc,$tf,$cer,$ced,$cod){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Postulacion_1($ced);
	
=======
		public function  Insertarpostulacion($tel,$dir,$fij,$cl,$ce,$ca){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_postulacion($ce);
>>>>>>> 7254ff85cb5e6f6df9644027a54020ba6136890b
		if ($result->num_rows>0) {
			$mensa="La postulacion ya ha sido realizada";
		
		}
		else{
			$sql="call usuario_postulacion_inser(?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sssssi',$tel_p,$dir_p,$fij_p,$cl_p,$ce_p,$ca_p);
			$tel_p=$tel;
			$dir_p=$dir;
			$fij_p=$fij;
			$cl_p=$cl;
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

public function EliminarPostulacion($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call VetEliminar_Adopcion('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Postulacion Eliminada";
	return $mensaje; 
}

}

?>