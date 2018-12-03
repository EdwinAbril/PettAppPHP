<?php

require_once ("../../Conexion.php");

class MetodoCiudadano{

	public function Mostrar_1_Ciudadano($ced){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from ciudadano where cedula='$ced'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function  InsertarCiudadano($c,$n,$t,$d,$co,$us){
	$conectar=new conectarproyecto();
	$conexion=$conectar->conexion();
	$result=$this->Mostrar_1_Ciudadano($c);
	if ($result->num_rows>0) {
		$mensa="El ciudadano ya ha sido registrado";
	
	}
	else{
		$sql="call inser_usuario_Admin(?,?,?,?,?,?)";
		$consulta=$conexion->prepare($sql);
		$consulta->bind_param('ssssss',$c_p,$n_p,$t_p,$d_p,$co_p,$us_p);
		$c_p=$c;
		$n_p=$n;
		$t_p=$t;
		$d_p=$d;
		$co_p=$co;
		$us_p=$us;
		$consulta->execute();
		$mensa="Ciudadano insertado correctamente";
	}
	return $mensa;

	}

	public function Mostrar_1_Usuario($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where nombre_usuario='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function  InsertarUsuario($nom,$cla,$foto){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_usuario($nom);
		if ($result->num_rows>0) {
			$mensa="El Usuario del Ciudadano ya ha sido registrado";
		
		}
		else{
			$sql="call inser_admin_Admin(?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssis',$nom_p,$cla_p,$rol_p,$foto_p);
			$nom_p=$nom;
			$cla_p=$cla;
			$rol_p=4;
			$foto_p=$foto;
			$consulta->execute();
			$mensa="Usuario del Ciudadano insertado correctamente";
		}
		return $mensa;

	}
}