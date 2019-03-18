<?php

require_once ("../../../Conexion.php");

class MetodoCitacion{
	
	public function Modificarcitacion($pos,$men,$fec,$hor){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		
			$sql="call Actualizar_Fecha_Citacion(?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('isss',$pos_p,$men_p,$fec_p,$hor_p);
			$pos_p=$pos;
			$men_p=$men;
			$fec_p=$fec;
			$hor_p=$hor;
			$consulta->execute();
			$mensa="Persona Citada";
		
		return $mensa;
	}


	public function Modificarseguimiento($cp,$fe,$me){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		
			$sql="call Actualizar_Fecha(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('iss',$cp_p,$fe_p,$me_p);
			$cp_p=$cp;
			$fe_p=$fe;
			$me_p=$me;
			$consulta->execute();
			$mensa="Postulacion Aceptada";
		
		return $mensa;
	}

}

?>