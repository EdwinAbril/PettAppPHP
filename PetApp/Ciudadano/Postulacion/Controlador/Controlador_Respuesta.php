<?php
require_once("../../Animales/Modelo/Modelo_Preguntas.php");
$mostrar= new MetodoPreguntas();
$resultado=$mostrar->Preguntas($Ced[0]);
require_once("../Vista/Vista_Insertar.php");
?>