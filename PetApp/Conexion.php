<?php
class conectarproyecto{
private $servidor="localhost";
private $usuario="root";
private $pass="16072011e";
private $bd="proyecto";

public function conexion(){
	$conexion=new mysqli($this->servidor,$this->usuario,$this->pass,$this->bd);
	return $conexion;
}
}
$con=new conectarproyecto();



?>
