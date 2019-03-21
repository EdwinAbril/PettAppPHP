<?php

require_once ("../../../Conexion.php");

class MetodoSeguimiento{
	
	public function Mostrar_1_animal($an){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$sql="select * from animal where codigo_animal='$an'";
		$consulta=mysqli_query($conexion,$sql);
		return $consulta;
	}
	
	public function Mostrar_1_positivo($pos){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$sql="select * from respuestausuario where codigo_positivo='$pos'";
		$consulta=mysqli_query($conexion,$sql);
		return $consulta;
	}
	public function InsertarPositivo($icon,$cep,$men,$enc){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_positivo($cep);
		if($result->num_rows>0){
			$mensa="No es posible enviar la respuesta";
		}
		else{
			$sql="call inser_respuesta_positiva(?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssss',$icon_p,$ce_p,$men_p,$enc_p);
			$icon_p=$icon;
			$ce_p=$cep;
			$men_p=$men;
			$enc_p=$enc;
			$consulta->execute();
			$mensa="Respuesta enviada";
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
	public function  InsertarAdopciones($ico,$coda,$ced,$men,$enc){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_adopcion($coda);
		if ($result->num_rows>0) {
			$mensa="La Adopcion ya ha sido realizada";
		
		}
		else{
			$sql="call VetInsertar_Adopcion(?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sisss',$ico_p,$coda_p,$ced_p,$men_p,$enc_p);
			$ico_p=$ico;
			$coda_p=$coda;
			$ced_p=$ced;
			$men_p=$men;
			$enc_p=$enc;
			$consulta->execute();
			$mensa="Proceso Finalizado correctamente";
		}
		return $mensa;

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
		$sql="call usuario_mascota_adop(?,?,?,?,?,?,?,?,?)";
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