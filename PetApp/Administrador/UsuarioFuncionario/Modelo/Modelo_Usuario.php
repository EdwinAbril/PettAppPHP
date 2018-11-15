<?php

require_once ("../../../Conexion.php");

class MetodoUsuario{
	
	public function MostrarUsuario(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where rol_login=2";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Usuario($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where nombre_usuario='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
	
	public function ModificarUsuario($usuario,$clave){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call mod_usu(?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ss',$usuario_p,$clave_p);
	$usuario_p=$usuario;
	$clave_p=$clave;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;
	}

}

?>