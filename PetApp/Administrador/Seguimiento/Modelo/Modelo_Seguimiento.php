<?php

require_once ("../../../Conexion.php");

class MetodoSeguimiento{
	
	public function MostrarSeguimiento(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from seguimiento";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarSeguimiento($codigo,$postulacion){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call FunModificar_Seguimiento(?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ii',$codigo_p,$postulacion_p);
	$codigo_p=$codigo;
	$postulacion_p=$postulacion;
	$consulta->execute();
	$mensa="Seguimiento Modificado";
	return $mensa;
	}
	
	public function Mostrar_1_Seguimiento($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from seguimiento where codigo_seguimiento='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Seguimiento_1($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from seguimiento where cod_postula='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	

		public function  InsertarSeguimiento($cod){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Seguimiento_1($cod);
		if ($result->num_rows>0) {
			$mensa="El seguimiento ya ha sido realizado";
		
		}
		else{
			$sql="call FunInsertar_Seguimiento(?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('i',$cod_p);
			$cod_p=$cod;
			$consulta->execute();
			$mensa="Seguimiento Ingresado correctamente";
		}
		return $mensa;

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

	public function EliminarSeguimiento($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call FunEliminar_Seguimiento('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Seguimiento Eliminado";
	return $mensaje; 
}

	public function EliminarPostulacion($x){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion(); 
	$sql="call usuario_postulacion_elim('$x')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Postulacion Eliminada";
	return $mensaje; 
}
public function Mostrar_1_positivo($pos){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$sql="select * from respuestausuario where codigo_positivo='$pos'";
		$consulta=mysqli_query($conexion,$sql);
		return $consulta;
	}

	public function InsertarNegativo($cep,$men){
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
			$mensa="Respuesta Enviada";
		}
		return $mensa;
	}


}

?>