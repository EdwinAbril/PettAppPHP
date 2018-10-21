<?php

require_once ("../../../Conexion.php");

class MetodoAdministrador{
	
	public function MostrarAdministrador(){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from usuarios";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Administrador($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from usuarios where usuario='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function ModificarAdministrador($usuario,$clave){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call act_admin_Admin(?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ss',$usuario_p,$clave_p);
	$usuario_p=$usuario;
	$clave_p=$clave;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;
	}

	public function EliminarAdministrador($d){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="call bor_admin_Admin('$d')";
	$consulta=mysqli_query($conexion,$sql);
	$mensaje="Administrador Eliminado";
	return $mensaje; 
}
	public function Mostrar_1_usuario($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from usuarios where usuario='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  InsertarUsuario($us,$cla){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_usuario($us);
		if ($result->num_rows>0) {
			$mensa="El Usuario del Administrador ya ha sido registrado";
		
		}
		else{
			$sql="call inser_admin_Admin(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssi',$u_p,$c_p,$r_p);
			$u_p=$us;
			$c_p=$cla;
			$r_p=1;
			$consulta->execute();
			$mensa="Usuario del Administrador insertado correctamente";
		}
		return $mensa;

	}

}

?>