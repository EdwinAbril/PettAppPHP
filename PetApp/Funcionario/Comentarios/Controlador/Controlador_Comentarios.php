<?php
require_once("../Modelo/Modelo_Comentarios.php");
$mostrar= new MetodoComentarios();
$resultado=$mostrar->MostrarComentarios();
require_once("../Vista/Vista_Comentarios.php");
?>