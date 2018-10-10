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

}

?>