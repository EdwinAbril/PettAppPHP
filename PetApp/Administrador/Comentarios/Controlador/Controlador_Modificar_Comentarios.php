<?php
require_once("../Modelo/Modelo_Comentarios.php");
$mostrar= new MetodoComentarios();
$resultado=$mostrar->Mostrar_1_Comentario($cod);
require_once("../Vista/Modificar_Comentarios.php");


?>