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

	public function ModificarSeguimiento($cedula,$telefono,$nombre,$correo,$clave){
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
		public function Mostrar_1_usuario($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from seguimiento where cod_postula='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  InsertarUsuario($cod){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_usuario($cod);
		if ($result->num_rows>0) {
			$mensa="El seguimiento ya ha sido realizado";
		
		}
		else{
			$sql="call inser_seg(?)";
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