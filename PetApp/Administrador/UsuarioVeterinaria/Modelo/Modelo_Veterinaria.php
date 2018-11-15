<?php

require_once ("../../../Conexion.php");

class MetodoVeterinarias{
		
	public function MostrarUsuario(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where rol_login=2";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
		
	public function MostrarVeterinarias(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from usuario_veterinaria";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function Mostrar_1_veterinaria($ni){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where nombre_usuario='$ni'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function Mostrar_2_veterinaria($ni){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from veterinaria where nit_veterinaria='$ni'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  InsertarUsuarioVeterinaria($use,$cla){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_veterinaria($use);
		if ($result->num_rows>0) {
			$mensa="El Usuario de Veterinaria ya ha sido registrado";
		
		}
		else{
			$sql="call inser_usu_vet(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssi',$nom_p,$cla_p,$rol_p);
			$nom_p=$use;
			$cla_p=$cla;
			$rol_p=3;
			$consulta->execute();
			$mensa="Usuario de la Veterinaria insertado correctamente";
		}
		return $mensa;

	}
			public function  InsertarUsuarioVeterinaria2($use){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_2_veterinaria($use);
		if ($result->num_rows>0) {
			$mensa="El Usuario de Veterinaria ya ha sido registrado";
		
		}
		else{
			$sql="call inser_us_vet(?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('si',$nom_p,$rol_p);
			$nom_p=$use;
			$rol_p=3;
			$consulta->execute();
			$mensa="Usuario de la Veterinaria insertado correctamente";
		}
		return $mensa;

	}
}

?>