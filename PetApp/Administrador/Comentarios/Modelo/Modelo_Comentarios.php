<?php

require_once ("../../../Conexion.php");

class MetodoComentarios{
	
	public function MostrarComentarios(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from comentarios";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	
	public function Mostrar_1_Comentario($cod){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from comentarios where codigo_comentario='$cod'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarComentarios($fecha,$cuerpo,$adopcion,$codigo){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call usuario_comentarios_actu(?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ssii',$fecha_p,$cuerpo_p,$adopcion_p,$codigo_p);
	$fecha_p=$fecha;
	$cuerpo_p=$cuerpo;
	$adopcion_p=$adopcion;
	$codigo_p=$codigo;
	$consulta->execute();
	$mensa="Comentario Modificado";
	return $mensa;
	}
}

?>