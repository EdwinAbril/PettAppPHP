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

	public function ModificarAnimal($codigo,$nombre,$tipo,$edad,$raza,$foto,$tamaño,$genero,$color){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call act_animal_Admin(?,?,?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('issssssss',$codigo_p,$nombre_p,$tipo_p,$edad_p,$raza_p,$foto_p,$tamaño_p,$genero_p,$color_p);
	$codigo_p=$codigo;
	$nombre_p=$nombre;
	$tipo_p=$tipo;
	$edad_p=$edad;
	$foto_p=$foto;
	$raza_p=$raza;
	$tamaño_p=$tamaño;
	$genero_p=$genero;
	$color_p=$color;
	$consulta->execute();
	$mensa="Animal Actualizado";
	return $mensa;
	}

	public function ModificarAdoptado($codigo,$nombre,$tipo,$edad,$raza,$foto,$tamaño,$genero,$color){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call act_adoptado_Admin(?,?,?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('issssssss',$codigo_p,$nombre_p,$tipo_p,$edad_p,$raza_p,$foto_p,$tamaño_p,$genero_p,$color_p);
	$codigo_p=$codigo;
	$nombre_p=$nombre;
	$tipo_p=$tipo;
	$edad_p=$edad;
	$foto_p=$foto;
	$raza_p=$raza;
	$tamaño_p=$tamaño;
	$genero_p=$genero;
	$color_p=$color;
	$consulta->execute();
	$mensa="Animal Actualizado";
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

	public function Mostrar_1_Adop1($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from adoptados where nombre_animal='$to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Adop2($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from adoptados where  tipo_animal='to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Adop3($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from adoptados where edad_animal='to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Adop4($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from adoptados where raza_animal='to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
	public function InsertarAnimal($na,$ta,$ea,$ra,$fot,$tam,$gen,$col){
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
		$sql="call inser_animal_Admin(?,?,?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssssssss',$na_p,$ta_p,$ea_p,$ra_p,$fot_p,$tam_p,$gen_p,$col_p);
			$na_p=$na;
			$ta_p=$ta;
			$ea_p=$ea;
			$ra_p=$ra;
			$fot_p=$fot;
			$tam_p=$tam;
			$gen_p=$gen;
			$col_p=$col;
			$consulta->execute();
			$mensa="Animal Ingresado";
		}
		return $mensa;
	}


	public function InsertarAdoptado($na,$ta,$ea,$ra,$fot,$tam,$gen,$col){
			$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
			$result=$this->Mostrar_1_Adop1($na);
		$resulta=$this->Mostrar_1_Adop2($ta);
		$resultad=$this->Mostrar_1_Adop3($ea);
		$resultado=$this->Mostrar_1_Adop4($ra);
		if ($result->num_rows>0) {
			$mensa="Animal Ingresado";
		}
		else{
		$sql="call inser_adoptado_Admin(?,?,?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssssssss',$na_p,$ta_p,$ea_p,$ra_p,$fot_p,$tam_p,$gen_p,$col_p);
			$na_p=$na;
			$ta_p=$ta;
			$ea_p=$ea;
			$ra_p=$ra;
			$fot_p=$fot;
			$tam_p=$tam;
			$gen_p=$gen;
			$col_p=$col;
			$consulta->execute();
			$mensa="Animal Ingresado";
		}
		return $mensa;
	}

	public function EliminarAnimal($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call bor_animal_Admin('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Animal Eliminado";
	return $mensaje; 
}

}

?>