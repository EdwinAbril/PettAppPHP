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

	public function Mostrar_1_Seguimiento_1($ta){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$sql="select * from seguimiento where codigo_seguimiento='ta'";
	}
	
		public function  Insertarpostulacion($tel,$dir,$fij,$cl,$ce,$ca){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_postulacion($ce);

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
	public function Insertarseguimiento($cp,$tel,$dir,$fij,$ce,$ca){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		
			$sql="call FunInsertar_Seguimiento(?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('issssi',$cp_p,$tel_p,$dir_p,$fij_p,$ce_p,$ca_p);

			$cp_p=$cp;
			$tel_p=$tel;
			$dir_p=$dir;
			$fij_p=$fij;
			$ce_p=$ce;
			$ca_p=$ca;
			$consulta->execute();
			$mensa="Postulacion Aceptada";
		
		return $mensa;
	}

		public function Mostrar_1_positivo($pos){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$sql="select * from respuestausuario where codigo_positivo='$pos'";
		$consulta=mysqli_query($conexion,$sql);
		return $consulta;
	}

		public function InsertarNegativo($cep,$men){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_positivo($cep);
		if($result->num_rows>0){
			$mensa="No es posible enviar la respuesta";
		}
		else{
			$sql="call inser_respuesta_positiva(?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ss',$ce_p,$men_p);
			$ce_p=$cep;
			$men_p=$men;
			$consulta->execute();
			$mensa="Respuesta Envidada";
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