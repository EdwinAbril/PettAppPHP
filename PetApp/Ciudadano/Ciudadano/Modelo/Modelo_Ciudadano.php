<?php

require_once ("../../../Conexion.php");

class MetodoCiudadano{

	public function ModificarUsuario($usuario,$clave,$foto){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call act_admin_Admin(?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('sss',$usuario_p,$clave_p,$foto_p);
	$usuario_p=$usuario;
	$clave_p=$clave;
	$foto_p=$foto;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;
	}

	public function Mostrar_1_Usuario($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where nombre_usuario='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
	
	public function MostrarCiudadano($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from ciudadano where usuario_ciu='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function Mostrar_1_Ciudadano($ced){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from ciudadano where cedula='$ced'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  Insertarciudadano($c,$n,$t,$d,$co,$us){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Ciudadano($c);
		if ($result->num_rows>0) {
			$mensa="El ciudadano ya ha sido registrado";
		
		}
		else{
			$sql="call inser_usuario_Admin(?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssssss',$c_p,$n_p,$t_p,$d_p,$co_p,$us_p);
			$c_p=$c;
			$n_p=$n;
			$t_p=$t;
			$d_p=$d;
			$co_p=$co;
			$us_p=$us;
			$consulta->execute();
			$mensa="Ciudadano insertado correctamente";
		}
		return $mensa;

	}
	public function ModificarCiudadano($cedula,$nombre,$telefono,$direccion,$correo){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call act_usuario_Admin(?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('sssss',$cedula_p,$nombre_p,$telefono_p,$direccion_p,$correo_p);
	$cedula_p=$cedula;
	$nombre_p=$nombre;
	$telefono_p=$telefono;
	$direccion_p=$direccion;
	$correo_p=$correo;
	$consulta->execute();
	$mensa="Ciudadano Modificado";
	return $mensa;
	}

public function EliminarCiudadano($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();       
	$sql="call bor_usuario_admin('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Ciudadano Eliminado";
	return $mensaje; 
}

}

?>