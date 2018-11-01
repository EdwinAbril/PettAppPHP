<?php
require_once("../Modelo/Modelo_Denuncias.php");
$mostrar= new MetodoDenuncias();
$resultado=$mostrar->Mostrar_1_Denuncia($cod);
require_once("../Vista/Modificar_Denuncias.php");


?>