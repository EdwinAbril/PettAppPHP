<?php

require_once ("../../../Conexion.php");

class MetodoSeguimiento{
	
	
	public function Mostrar_1_positivo($pos){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$sql="select * from respuestausuario where cedula_respuesta='$pos'";
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

		


}

?>