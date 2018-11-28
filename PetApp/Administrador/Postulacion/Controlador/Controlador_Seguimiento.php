 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['aceptar'])){
    $result=insertars();
    require_once("../Vista/Vista_Postulacion.php");    
}

function insertars(){
	$pos=$_POST['cp'];
	$tel=$_POST['tel'];
	$dir=$_POST['dir'];
	$fij=$_POST['tf'];
    $ce=$_POST['ced'];
    $ca=$_POST['an'];


require_once("../Modelo/Modelo_Postulacion.php");
$mostrar=new MetodoPostulacion();
$result=$mostrar->Insertarseguimiento($pos,$tel,$dir,$fij,$ce,$ca);
return $result;
}
?>