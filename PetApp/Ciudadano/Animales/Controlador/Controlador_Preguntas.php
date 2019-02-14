<?php
require_once("../Modelo/Modelo_Preguntas.php");
$usu=$_POST["usu"];
$mostrar= new MetodoPreguntas();
$resultado=$mostrar->Preguntas1($usu);
require_once("../Vista/Vista_Animal.php");
?>