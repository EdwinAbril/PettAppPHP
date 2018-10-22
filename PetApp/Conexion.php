<?php
class conectarproyecto{
private $servidor="localhost";
private $usuario="root";
<<<<<<< HEAD
<<<<<<< HEAD
private $pass="0000";
=======
private $pass="16072011e";
>>>>>>> 35e7741cd69f23285607747e5dc556d54d4abd28
=======
private $pass="16072011e";
>>>>>>> 35e7741cd69f23285607747e5dc556d54d4abd28
private $bd="proyecto";

public function conexion(){
	$conexion=new mysqli($this->servidor,$this->usuario,$this->pass,$this->bd);
	return $conexion;
}
}
$con=new conectarproyecto();



?>
