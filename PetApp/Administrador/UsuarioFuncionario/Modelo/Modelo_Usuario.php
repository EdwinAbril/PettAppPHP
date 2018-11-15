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
}

?>