<?php

require_once ("../../../Conexion.php");

class MetodoUsuario{
	
	public function MostrarUsuario($ini){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where nombre_usuario='$ini';";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

}

?>