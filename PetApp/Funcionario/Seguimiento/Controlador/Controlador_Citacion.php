 <link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php

    if (isset($_POST['modificarf']))
    {
        $result=modificar();
        header('Location:../Vista/Vista_Seguimiento.php');
    }

    function modificar(){
        $pos=$_POST["pos"];
        $feccit=$_POST["citafec"];
        $horcit=$_POST["horafec"];
        $men="nulo.png";
        $mensaj="Se realizara la visita en : ".$feccit." en el horario de ".$horcit.".";
        require_once("../Modelo/Modelo_Citacion.php");
        $mostrar=new MetodoCitacion();
        $result=$mostrar->Modificarseguimiento($pos,$feccit,$men);
        $result=$mostrar->Modificarcitacion($pos,$mensaj,$feccit,$horcit);
    
    return $resultado;
    }

?>