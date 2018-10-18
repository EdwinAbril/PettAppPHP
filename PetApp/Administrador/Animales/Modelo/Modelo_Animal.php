<?php

require_once ("../../../Conexion.php");

class MetodoAnimal{
	
	public function MostrarAnimal(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from animal";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Animal($cod){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from animal where codigo_animal='$cod'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarAnimal($codigo,$nombre,$tipo,$edad,$raza){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call VetModificar_Animal(?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('issss',$codigo_p,$nombre_p,$tipo_p,$edad_p,$raza_p);
	$codigo_p=$codigo;
	$nombre_p=$nombre;
	$tipo_p=$tipo;
	$edad_p=$edad;
	$raza_p=$raza;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;
	}


	public function Mostrar_1_Animal1($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from animal where nombre_animal='$to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Animal2($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from animal where  tipo_animal='to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Animal3($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from animal where edad_animal='to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Animal4($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from animal where raza_animal='to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
	public function InsertarAnimal($na,$ta,$ea,$ra){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Animal($na);
		$resulta=$this->Mostrar_1_Animal2($ta);
		$resultad=$this->Mostrar_1_Animal3($ea);
		$resultado=$this->Mostrar_1_Animal4($ra);
		if ($result->num_rows>0 && $resulta->num_rows>0 && $resultad->num_rows>0 && $resultado->num_rows>0) {
			$mensa="El animal ya Existe";
		}
		else{
		$sql="call inser_animal_Admin(?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssss',$na_p,$ta_p,$ea_p,$ra_p);
			$na_p=$na;
			$ta_p=$ta;
			$ea_p=$ea;
			$ra_p=$ra;
			$consulta->execute();
			$mensa="Animal Ingresado";
		}
		return $mensa;
	}

}

?>