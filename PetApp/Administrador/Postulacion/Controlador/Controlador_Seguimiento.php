 <link rel="stylesheet" type="text/css" href="../Vista/Estilos.css">
<?php
if (isset($_POST['aceptar'])){
    $result=insertars();
   
    header('Location:../Vista/Vista_Postulacion.php');
}

function insertars(){
	$pos=$_POST['cp'];
	$tel=$_POST['tel'];
	$dir=$_POST['dir'];
	$fij=$_POST['tf'];
	$cer=$_POST['cer'];
	$fot=$_POST['fot'];
	$est=$_POST['est'];
	$cre=$_POST['cre'];
	$ubi=$_POST['ubi'];
	$tvi=$_POST['tvi'];
	$pun=$_POST['pun'];
	$rec=$_POST['rpu'];
    $ce=$_POST['cedu'];
    $ca=$_POST['an'];


require_once("../Modelo/Modelo_Postulacion.php");
$mostrar=new MetodoPostulacion();
$result=$mostrar->Insertarseguimiento($pos,$tel,$dir,$fij,$cer,$fot,$est,$cre,$ubi,$tvi,$pun,$rec,$ce,$ca);
return $result;
}
?>