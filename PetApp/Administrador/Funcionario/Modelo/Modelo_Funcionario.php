<?php

require_once ("../../../Conexion.php");

class MetodoFuncionario{
	
	public function MostrarFuncionario(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from funcionario";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Funcionario($ced){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from funcionario where cedula_funcionario='$ced'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarFuncionario($cedula,$telefono,$nombre,$correo,$clave){
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