<?php

require_once ("../../../Conexion.php");

class MetodoFunci{
	
		
	public function MostrarFunci($fun){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from funcionario where cedula_funcionario='$fun'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}


}
?>