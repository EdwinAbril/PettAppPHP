<?php

require_once ("../../../Conexion.php");

class MetodoSeguimiento{
	
	
	public function Mostrar_1_positivo($pos){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$sql="select * from respuestausuario where codigo_positivo='$pos'";
		$consulta=mysqli_query($conexion,$sql);
		return $consulta;
	}
	public function InsertarPositivo($cep,$men){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_positivo($cep);
		if($result->num_rows>0){
			$mensa="No es posible enviar la respuesta";
		}
		else{
			$sql="call inser_respuesta_positiva(?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ss',$ce_p,$men_p);
			$ce_p=$cep;
			$men_p=$men;
			$consulta->execute();
			$mensa="Respuesta enviada";
		}
		return $mensa;
	}


		public function Mostrar_1_positivo_1($pos){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$sql="select * from respuestausuario where codigo_positivo='$pos'";
		$consulta=mysqli_query($conexion,$sql);
		return $consulta;
	}

	public function InsertarNegativo($cep,$men){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_positivo_1($cep);
		if($result->num_rows>0){
			$mensa="No es posible enviar la respuesta";
		}
		else{
			$sql="call inser_respuesta_positiva(?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ss',$ce_p,$men_p);
			$ce_p=$cep;
			$men_p=$men;
			$consulta->execute();
			$mensa="Respuesta Enviada";
		}
		return $mensa;

	}
		public function Mostrar_1_Adopcion($cod){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from adopcion where codigo_adopcion='$cod'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
	public function  InsertarAdopciones($coda,$ced,$men){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_adopcion($coda);
		if ($result->num_rows>0) {
			$mensa="La Adopcion ya ha sido realizada";
		
		}
		else{
			$sql="call VetInsertar_Adopcion(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('iss',$coda_p,$ced_p,$men_p);
			$coda_p=$coda;
			$ced_p=$ced;
			$men_p=$men;
			$consulta->execute();
			$mensa="Proceso Finalizado correctamente";
		}
		return $mensa;

	}
		


}

?>