<?php
class conectarproyecto{
private $servidor="localhost";
private $usuario="root";
<<<<<<< HEAD
private $pass="camilo57";
=======
private $pass="16072011e";
>>>>>>> c8a465215f4cfa090d663f698e3a833d6f281414
private $bd="proyecto";

public function conexion(){
	$conexion=new mysqli($this->servidor,$this->usuario,$this->pass,$this->bd);
	return $conexion;
}
}
$con=new conectarproyecto();



?>
