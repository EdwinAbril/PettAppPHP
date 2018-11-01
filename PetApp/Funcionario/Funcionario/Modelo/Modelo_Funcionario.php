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

	public function ModificarFuncionario($cedula,$telefono,$nombre,$correo){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call Modificar_Funcionario(?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ssss',$cedula_p,$telefono_p,$nombre_p,$correo_p);
	$cedula_p=$cedula;
	$telefono_p=$telefono;
	$nombre_p=$nombre;
	$correo_p=$correo;
	$consulta->execute();
	$mensa="Funcionario Modificado";
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

		public function  InsertarFuncionario($ced,$tel,$nom,$cor){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_funcionario_1($ced);
		if ($result->num_rows>0) {
			$mensa="El Funcionario ya ha sido registrado";
		
		}
		else{
			$sql="call Insertar_Funcionario(?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssssi',$ced_p,$tel_p,$nom_p,$cor_p,$rol_p);
			$ced_p=$ced;
			$tel_p=$tel;
			$nom_p=$nom;
			$cor_p=$cor;
			$rol_p=2;
			$consulta->execute();
			$mensa="Funcionario insertado correctamente";
		}
		return $mensa;

	}

	
}

?>