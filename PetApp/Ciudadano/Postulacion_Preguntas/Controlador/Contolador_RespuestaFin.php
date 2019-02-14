 <link rel="stylesheet" href="../Vista/Estilos.css">

<?php
session_start();
if (isset($_POST['fin'])){
	$result=insertar();
	$cod=$_POST["codi"];
	$_SESSION["codi"]=$cod;
	header('Location: ../../Postulacion/Vista/Vista_Insertar.php');
}

function insertar(){
	require_once("../Modelo/Modelo_Respuestas.php");
	$mostrar=new MetodoRespuestas();
	$r1=$_POST["res1"];
	$r2=$_POST["res2"];
	$r3=$_POST["res3"];
	$r4=$_POST["res4"];
	$r5=$_POST["res5"];
	$r6=$_POST["res6"];
	$r7=$_POST["res7"];
	$r8=$_POST["res8"];
	$r9=$_POST["res9"];
	$r10=$_POST["res10"];
	$r11=$_POST["res11"];
	$r12=$_POST["res12"];
	$r13=$_POST["res13"];
	$r14=$_POST["res14"];
	$r15=$_POST["res15"];
	$r16=$_POST["res16"];
	$r17=$_POST["res17"];
	$r18=$_POST["res18"];
	$r19=$_POST["res19"];
	$r20=$_POST["res20"];
	$rt=$r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8+$r9+$r10+$r11+$r12+$r13+$r14+$r15+$r16+$r17+$r18+$r19+$r20;
	$c=$_POST["ced"];
	
	$result=$mostrar->InsertarRespuestas($r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$r10,$r11,$r12,$r13,$r14,$r15,$r16,$r17,$r18,$r19,$r20,$c);
	$result=$mostrar->InsertarRespuestasFin($rt,$c);

	return $result;
}
?>