<?php

require_once ("../../../Conexion.php");

class MetodoUsuario{
	
	public function MostrarUsuario(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where rol_login=4";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarUsuario($cedula,$telefono,$nombre,$correo,$clave){
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
	$sql="select * from login_usuarios where nombre_usuario='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	
		public function  InsertarUsuario($nom,$cla){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_usuario($nom);
		if ($result->num_rows>0) {
			$mensa="El Usuario del Ciudadano ya ha sido registrado";
		
		}
		else{
			$sql="call inser_usu_ciud(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssi',$nom_p,$cla_p,$rol_p);
			$nom_p=$nom;
			$cla_p=$cla;
			$rol_p=4;
			$consulta->execute();
			$mensa="Usuario del Ciudadano insertado correctamente";
		}
		return $mensa;

	}


	public function EliminarUsuario($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call borrar_usuario_Admin('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Usuario Eliminado";
	return $mensaje; 

}

}

?>