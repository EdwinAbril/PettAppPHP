<?php

require_once ("../../../Conexion.php");

class MetodoCitacion{
	
	public function Insertarcitacion($ced,$men,$fec){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		
			$sql="call Insertar_Citacion(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sss',$ced_p,$men_p,$fec_p);
			$ced_p=$ced;
			$men_p=$men;
			$fec_p=$fec;
			$consulta->execute();
			$mensa="Persona Citada";
		
		return $mensa;
	}


	public function Insertarseguimiento($cp,$tel,$dir,$fij,$fot,$est,$cre,$ubi,$tvi,$pun,$rep,$ce,$ca){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		
			$sql="call FunInsertar_Seguimiento(?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('issssiississi',$cp_p,$tel_p,$dir_p,$fij_p,$cl_p,$fot_p,$est_p,$cre_p,$ubi_p,$tvi_p,$pun_p,$rep_p,$ce_p,$ca_p);

			$cp_p=$cp;
			$tel_p=$tel;
			$dir_p=$dir;
			$fij_p=$fij;
			$fot_p=$fot;
			$est_p=$est;
			$cre_p=$cre;
			$ubi_p=$ubi;
			$tvi_p=$tvi;
			$pun_p=$pun;
			$rep_p=$rep;
			$ce_p=$ce;
			$ca_p=$ca;
			$consulta->execute();
			$mensa="Postulacion Aceptada";
		
		return $mensa;
	}

}

?>