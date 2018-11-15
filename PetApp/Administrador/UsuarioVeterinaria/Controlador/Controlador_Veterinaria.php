<?php
require_once("../Modelo/Modelo_Veterinaria.php");
$mostrar= new MetodoVeterinarias();
$resultado=$mostrar->MostrarUsuario();
require_once("../Vista/Vista_Usuario.php");
?>