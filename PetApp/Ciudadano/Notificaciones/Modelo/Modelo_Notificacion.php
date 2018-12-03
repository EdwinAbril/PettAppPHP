<?php

require_once ("../../../Conexion.php");

class MetodoNotificacion{
	
	public function MostrarNotificacion($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from respuestausuario where cedula_respuesta='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

}
?>