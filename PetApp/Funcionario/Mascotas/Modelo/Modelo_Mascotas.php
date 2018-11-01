<?php

require_once ("../../../Conexion.php");

class MetodoMascotas{
	
	public function MostrarMascotas(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from mascota";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Mascota($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from mascota where codigo_mascota='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarMascotas($codigo,$nombre,$descendencia,$estado,$tipo,$edad,$raza,$cedula){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call usuario_mascota_actu(?,?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('isssssss',$codigo_p,$nombre_p,$descendencia_p,$estado_p,$tipo_p,$edad_p,$raza_p,$cedula_p);
	$codigo_p=$codigo;
	$nombre_p=$nombre;
	$descendencia_p=$descendencia;
	$estado_p=$estado;
	$tipo_p=$tipo;
	$edad_p=$edad;
	$raza_p=$raza;
	$cedula_p=$cedula;
	$consulta->execute();
	$mensa="Mascota Modificada";
	return $mensa;
	}

	public function EliminarMascotas($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call usuario_mascota_elim('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Mascota Eliminada";
	return $mensaje; 
}
public function Mostrar_1_Mascotas_1($to){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from mascota where raza_animal='to'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
	public function InsertarMascotas($nm,$des,$em,$tm,$edm,$rm,$ced,$fot){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Mascotas_1($nm);
		if ($result->num_rows>0) {
			$mensa="La Mascota ya existe";
		}
		else{
		$sql="call usuario_mascota_inser(?,?,?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssssssss',$nm_p,$des_p,$em_p,$tm_p,$edm_p,$rm_p,$ced_p,$fot_p);
			$nm_p=$nm;
			$des_p=$des;
			$em_p=$em;
			$tm_p=$tm;
			$edm_p=$edm;
			$rm_p=$rm;
			$ced_p=$ced;
			$fot_p=$fot;
			$consulta->execute();
			$mensa="Mascota Ingresada";
		}
		return $mensa;
	}

}

?>