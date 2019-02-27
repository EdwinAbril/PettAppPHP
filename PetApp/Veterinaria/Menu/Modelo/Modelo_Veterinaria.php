<?php

require_once ("../../../Conexion.php");

class MetodoVeterinaria{
	
	public function MostrarVeterinaria($ini){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where nombre_usuario='$ini';";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

}

?>