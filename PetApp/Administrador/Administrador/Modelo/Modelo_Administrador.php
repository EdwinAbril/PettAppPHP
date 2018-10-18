<?php

require_once ("../../../Conexion.php");

class MetodoAdministrador{
	
	public function MostrarAdministrador(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from usuarios";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Administrador($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from usuarios where usuario='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarAdministrador($usuario,$clave){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call act_admin_Admin(?,?)";
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