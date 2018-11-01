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

	public function ModificarVeterinaria($cedula,$telefono,$nombre,$correo,$clave){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call act_veter_Admin(?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ssssi',$cedula_p,$telefono_p,$nombre_p,$correo_p,$clave_p);
	$cedula_p=$cedula;
	$telefono_p=$telefono;
	$nombre_p=$nombre;
	$correo_p=$correo;
	$clave_p=$clave;
	$consulta->execute();
	$mensa="Veterinaria Modificada";
	return $mens;
	}
		public function Mostrar_1_Veterinaria($n){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from veterinaria where nit_veterinaria='$n'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function  Insertarveterinaria($ni,$t,$nom,$d,$cl){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Veterinaria($ni);
		if ($result->num_rows>0) {
			$mensa="La veterinaria ya ha sido registrada";
		
		}
		else{
			$sql="call inser_veter_Admin(?,?,?,?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('sssssi',$n_p,$t_p,$no_p,$d_p,$cl_p,$r_p);
			$n_p=$ni;
			$t_p=$t;
			$no_p=$nom;
			$d_p=$d;
			$cl_p=$cl;
			$r_p=3;
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