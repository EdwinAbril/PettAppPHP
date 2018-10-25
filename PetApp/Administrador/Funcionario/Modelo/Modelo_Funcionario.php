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
	$consulta->bind_param('sssss',$cedula_p,$telefono_p,$nombre_p,$correo_p,$clave_p);
	$cedula_p=$cedula;
	$telefono_p=$telefono;
	$nombre_p=$nombre;
	$correo_p=$correo;
	$clave_p=$clave;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;
	}

public function EliminarFuncionario($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call Eliminar_Funcionario('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Funcionario Eliminado"; 
	return $mensaje; 
}
		public function Mostrar_1_funcionario_1($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from funcionario where cedula_funcionario='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  InsertarFuncionario($ced,$tel,$nom,$cor,$cla){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_funcionario_1($ced);
		if ($result->num_rows>0) {
			$mensa="El Funcionario ya ha sido registrado";
		
		}
		else{
			$sql="call inser_fun_Admin(?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sssssi',$ced_p,$tel_p,$nom_p,$cor_p,$cla_p,$rol_p);
			$ced_p=$ced;
			$tel_p=$tel;
			$nom_p=$nom;
			$cor_p=$cor;
			$cla_p=$cla;
			$rol_p=2;
			$consulta->execute();
			$mensa="Funcionario insertado correctamente";
		}
		return $mensa;

	}

	
}

?>