<?php

require_once ("../../../Conexion.php");

class MetodoVeterinaria{
	


		public function Mostrar_1_usuario($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from usuario_veterinaria where nombre_usuario='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  InsertarUsuario($nom,$cla){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_usuario($nom);
		if ($result->num_rows>0) {
			$mensa="El Usuario de la Veterinaria ya ha sido registrado";
		
		}
		else{
			$sql="call inser_usu_vet(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssi',$nom_p,$cla_p,$rol_p);
			$nom_p=$nom;
			$cla_p=$cla;
			$rol_p=2;
			$consulta->execute();
			$mensa="Usuario de la Veterinaria insertado correctamente";
		}
		return $mensa;

	}
}

?>