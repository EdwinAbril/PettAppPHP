<?php

require_once ("../../../Conexion.php");

class MetodoMascotas{
	
	public function MostrarCedula($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select cedula from ciudadano where usuario_ciu='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
		
	public function MostrarMascotas($ced){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from mascota where ced='$ced'";
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

	public function ModificarMascotas($codigo,$nombre,$tipo,$edad,$raza,$foto,$tamaño,$genero,$color,$cedula){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call usuario_mascota_actu(?,?,?,?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('isssssssss',$codigo_p,$nombre_p,$tipo_p,$edad_p,$raza_p,$foto_p,$tamaño_p,$genero_p,$color_p,$cedula_p);
	$codigo_p=$codigo;
	$nombre_p=$nombre;
	$tipo_p=$tipo;
	$edad_p=$edad;
	$raza_p=$raza;
	$foto_p=$foto;
	$tamaño_p=$tamaño;
	$genero_p=$genero;
	$color_p=$color;
	$cedula_p=$cedula;
	$consulta->execute();
	$mensa="Mascota Actualizada";
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
	public function InsertarMascotas($nm,$tip,$ed,$raz,$fot,$tam,$gen,$col,$ced){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$sql="call usuario_mascota_inser(?,?,?,?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sssssssss',$nm_p,$tip_p,$ed_p,$raz_p,$fot_p,$tam_p,$gen_p,$col_p,$ced);
			$nm_p=$nm;
			$tip_p=$tip;
			$ed_p=$ed;
			$raz_p=$raz;
			$fot_p=$fot;
			$tam_p=$tam;
			$gen_p=$gen;
			$col_p=$col;
			$ced_p=$ced;
			$consulta->execute();
			$mensa="Mascota Ingresada";
		
		return $mensa;

}
}
?>