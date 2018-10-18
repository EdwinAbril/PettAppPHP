<?php

require_once ("../../../Conexion.php");

class MetodoCiudadano{
	
	public function MostrarCiudadano(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from ciudadano";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function Mostrar_1_Ciudadano($ced){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from ciudadano where cedula='$ced'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  Insertarciudadano($c,$n,$t,$d,$co){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Ciudadano($c);
		if ($result->num_rows>0) {
			$mensa="El ciudadano ya ha sido registrado";
		
		}
		else{
			$sql="call inser_usuario_Admin(?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sssss',$c_p,$n_p,$t_p,$d_p,$co_p);
			$c_p=$c;
			$n_p=$n;
			$t_p=$t;
			$d_P=$d;
			$co_p=$co;
			$consulta->execute();
			$mensa="Ciudadano insertado correctamente";
		}
		return $mensa;

	}
}

?>