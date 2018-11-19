<?php

require_once ("../../../Conexion.php");

class MetodoAdministrador{
	
	public function MostrarAdministrador($ini){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where rol_login=1 and nombre_usuario <> '$ini';";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Administrador($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where nombre_usuario='$usu'";
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

		public function Mostrar_1_Administrador_1($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from login_usuarios where nombre_usuario='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

		public function  InsertarUsuario($nom,$cla){
		$conectar=new conectarproyecto();
		$conexion=$conectar->conexion();
		$result=$this->Mostrar_1_Administrador_1($nom);
		if ($result->num_rows>0) {
			$mensa="El Usuario de Administrador ya ha sido registrado";
		
		}
		else{
			$sql="call inser_admin_Admin(?,?,?)";
			$consulta=$conexion->prepare($sql);
			$consulta->bind_param('ssi',$nom_p,$cla_p,$rol_p);
			$nom_p=$nom;
			$cla_p=$cla;
			$rol_p=1;
			$consulta->execute();
			$mensa="Usuario de Administrador insertado correctamente";
		}
		return $mensa;

	}


}

?>