 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['aceptarc'])){
	$result=Insertar();
	header('Location:../../Menu/Vista/Funcionario.php');	
}

function Insertar(){
	$posseg=$_POST["posseg"];
    $telseg=$_POST["telseg"];
    $dirseg=$_POST["dirseg"];
    $fijseg=$_POST["fijseg"];
    $eceseg=$_POST["eceseg"];
    $estseg=$_POST["estseg"];
    $resseg=$_POST["resseg"];
    $ubiseg=$_POST["ubiseg"];
    $vivseg=$_POST["vivseg"];
    $punseg=$_POST["punseg"];
    $recseg=$_POST["recseg"];
    $cedseg=$_POST["cedseg"];
    $aniseg=$_POST["aniseg"];
    $feccit=$_POST["citafec"];
    $horcit=$_POST["horafec"];
	$mensaj="Se realizara la visita en:".$feccit." en el horario de ".$horcit.".";
	require_once("../Modelo/Modelo_Citacion.php");
	$mostrar=new MetodoCitacion();
	$result=$mostrar->Insertarcitacion($cedseg,$mensaj,$feccit,$horcit);
	$result=$mostrar->Insertarseguimiento($posseg,$telseg,$dirseg,$fijseg,$eceseg,$estseg,$resseg,$ubiseg,$vivseg,$punseg,$recseg,$cedseg,$aniseg);
	return $result;
	
}
?>