<?php

require_once ("../../../Conexion.php");

class MetodoRespuestas{
	
		public function  InsertarRespuestas($re1,$re2,$re3,$re4,$re5,$re6,$re7,$re8,$re9,$re10,$re11,$re12,$re13,$re14,$re15,$re16,$re17,$re18,$re19,$re20,$ce){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		
			$sql="call pregunta(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('iiiiiiiiiiiiiiiiiiiis',$re1_p,$re2_p,$re3_p,$re4_p,$re5_p,$re6_p,$re7_p,$re8_p,$re9_p,$re10_p,$re11_p,$re12_p,$re13_p,$re14_p,$re15_p,$re16_p,$re17_p,$re18_p,$re19_p,$re20_p,$ce);
			$re1_p=$re1;
			$re2_p=$re2;
			$re3_p=$re3;
			$re4_p=$re4;
			$re5_p=$re5;
			$re6_p=$re6;
			$re7_p=$re7;
			$re8_p=$re8;
			$re9_p=$re9;
			$re10_p=$re10;
			$re11_p=$re11;
			$re12_p=$re12;
			$re13_p=$re13;
			$re14_p=$re14;
			$re15_p=$re15;
			$re16_p=$re16;
			$re17_p=$re17;
			$re18_p=$re18;
			$re19_p=$re19;
			$re20_p=$re20;
			$ce_p=$ce;
			$consulta->execute();
			$mensa="Exito";
		
		return $mensa;

	}

	public function  InsertarRespuestasFin($rt,$ce){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		
			$sql="insert into respuesta_pre values(?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('is',$rt_p,$ce);
			$rt_p=$rt;
			$ce_p=$ce;
			$consulta->execute();
			$mensa="Exito";
		
		return $mensa;

	}


}

?>