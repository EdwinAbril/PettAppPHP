<?php

require_once ("../../../Conexion.php");

class MetodoFuncionario{
	


		public function Mostrar_1_funcionario($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from usuario_funcionario where cedula_fun='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  InsertarFuncionario($ced,$nom,$cla){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_funcionario($ced);
		if ($result->num_rows>0) {
			$mensa="El Usuario del Funcionario ya ha sido registrado";
		
		}
		else{
			$sql="call inser_usu_Fun(?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sssi',$ced_p,$nom_p,$cla_p,$rol_p);
			$ced_p=$ced;
			$nom_p=$nom;
			$cla_p=$cla;
			$rol_p=4;
			$consulta->execute();
			$mensa="Usuario del Funcionario insertado correctamente";
		}
		return $mensa;

	}
}

?>