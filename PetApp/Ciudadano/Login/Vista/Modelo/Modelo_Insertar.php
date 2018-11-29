<?php

require_once ("../../../Conexion.php");

class MetodoUsCiudadano{
		
	public function MostrarCiudadano(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function Mostrar_1_ciudadano($ced){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where rol_login='$ced'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  InsertarUsuarioCiudadano($use,$cla){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_ciudadano($use);
		if ($result->num_rows>0) {
			$mensa="El Nombre de usuario ya existe";
		
		}
		else{
			$sql="call inser_usu_ciud(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssi',$nom_p,$cla_p,$rol_p);
			$nom_p=$use;
			$cla_p=$cla;
			$rol_p=4;
			$consulta->execute();
			$mensa="Usuario registrado Correctamente";
		}
		return $mensa;

	}
}

?>