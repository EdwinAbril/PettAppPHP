<?php

require_once ("../../../Conexion.php");

class MetodoFuncionarios{
		
	public function MostrarFuncionario(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from usuario_funcionario";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function Mostrar_1_funcionario($ced){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from usuario_funcionario where cedula_fun='$ced'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  InsertarUsuarioFuncionario($use,$cla){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_funcionario($use);
		if ($result->num_rows>0) {
			$mensa="El Usuario de Funcionario ya ha sido registrado";
		
		}
		else{
			$sql="call inser_usu_func(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssi',$nom_p,$cla_p,$rol_p);
			$nom_p=$use;
			$cla_p=$cla;
			$rol_p=2;
			$consulta->execute();
			$mensa="Usuario de Funcionario insertado correctamente";
		}
		return $mensa;

	}
}

?>