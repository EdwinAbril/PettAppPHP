<?php

require_once ("../../Conexion.php");

class MetodoRegistro{

	public function Verificar($ce){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from registro_usuario where cedula_ciu='$ce' || nombre_usuario='$ce'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Registrar($cedula,$usuario,$clave,$rol){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$result=$this->Verificar($cedula);
	$resulta=$this->Verificar($usuario);
	if ($result->num_rows>0) {
		$mensa="El Usuario ya existe";
	}
	elseif($resulta->num_rows>0){
		$mensa="El Nombre de usuario ya esta en uso";
	}
	else{
	$sql="call insertar_usuario_Admin(?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('sssi',$cedula_p,$usuario_p,$clave_p,$rol_p);
	$cedula_p=$cedula;
	$usuario_p=$usuario;
	$clave_p=$clave;
	$rol_p=$rol;
	$consulta->execute();
	$mensa="Usuario Ingresado";
	
	}
	return $mensa;

}
}
?>