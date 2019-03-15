<?php

require_once ("../../../Conexion.php");

class MetodoVeterinaria{
	
	public function MostrarVeterinaria(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from veterinaria";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarVeterinaria($nit,$telefono,$nombre,$direccion){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call act_veter_Admin(?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ssss',$nit_p,$telefono_p,$nombre_p,$direccion_p);
	$nit_p=$nit;
	$telefono_p=$telefono;
	$nombre_p=$nombre;
	$direccion_p=$direccion;
	$consulta->execute();
	$mensa="Veterinaria Modificada";
	return $mensa;
	}
		public function Mostrar_1_Veterinaria($n){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from veterinaria where nit_veterinaria='$n'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function InsertarDatos($us,$con,$fot){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Veterinaria($us);
		if ($result->num_rows>0) {
			$mensa="La Veterinaria ya ha sido registrada";
		}
		else{
			$sql="call inser_admin_Admin(?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssis',$us_p,$con_p,$rol_p,$fot);
			$us_p=$us;
			$con_p=$con;
			$rol_p=2;
			$fot_p=$fot;
			$consulta->execute();
			$mensa="Funcionario Ingresado Correctamente";
		}
		return $mensa;
	}

	public function  Insertarveterinaria($ni,$t,$nom,$d){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Veterinaria($ni);
		if ($result->num_rows>0) {
			$mensa="La veterinaria ya ha sido registrada";
		
		}
		else{
			$sql="call inser_veter_Admin(?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssss',$n_p,$t_p,$no_p,$d_p);
			$n_p=$ni;
			$t_p=$t;
			$no_p=$nom;
			$d_p=$d;
			$consulta->execute();
			$mensa="Veterinaria insertada correctamente";
		}
		return $mensa;

	}

	public function EliminarVeterinaria($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call bor_veter_Admin('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Veterinaria Eliminada";
	return $mensaje; 

	}

	
}

?>