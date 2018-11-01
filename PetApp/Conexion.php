<?php
class conectarproyecto{
private $servidor="localhost";
private $usuario="root";
<<<<<<< HEAD
private $pass="16072011e";
=======
private $pass="camilo57";
>>>>>>> 13d25873c75502ed86527537d952da97665f32d5
private $bd="proyecto";

public function conexion(){
	$conexion=new mysqli($this->servidor,$this->usuario,$this->pass,$this->bd);
	return $conexion;
}
}
$con=new conectarproyecto();



?>
