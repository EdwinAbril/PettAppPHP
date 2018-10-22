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

	public function ModificarPostulacion($cedula,$telefono,$nombre,$correo,$clave){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call Modificar_Funcionario(?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ssssi',$cedula_p,$telefono_p,$nombre_p,$correo_p,$clave_p);
	$cedula_p=$cedula;
	$telefono_p=$telefono;
	$nombre_p=$nombre;
	$correo_p=$correo;
	$clave_p=$clave;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;
	}
	public function Mostrar_1_Postulacion($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from postulacion where cedu='to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
	public function InsertarPostulacion($tc,$dc,$tf,$cer,$ced,$cod){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Postulacion($ced);
	
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