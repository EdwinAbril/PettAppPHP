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
	public function Mostrar_1_postulacion($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from postulacion where cedu='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
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
}

?>