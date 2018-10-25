<?php

require_once ("../../Conexion.php");

class MetodoLogin{

	public function Login($u,$c){
		$conectar= new conectarproyecto();
		$conexion= $conectar->conexion();
		$sql="select * from login_usuarios where nombre_usuario='$u' and clave='$c'";
		$consulta=$conexion->query($sql);
		return $consulta;
	}
}
?>