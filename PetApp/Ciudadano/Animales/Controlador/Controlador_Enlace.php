<?php
if (isset($_POST['readop'])) {
$cod=$_POST['codi'];
echo $cod;
require_once("../Controlador/Controlador_Preguntas.php");
while($Pre=mysqli_fetch_row($resultado)){
  $ce=$Pre[0];
 require_once("../Modelo/Modelo_Preguntas.php");
  $obj= new MetodoPreguntas();
  $con=$obj->Preguntas($ce);
  $num=$con->num_rows;
}
  if ($num>0){
    while($sql_d=$con->fetch_assoc()){
      session_start();
        $_SESSION["res"]=$sql_d['respuesta_fin'];
        $_SESSION["ced"]=$sql_d['cedula'];
        $_SESSION["codi"]=$_POST['codi'];
        header("Location:../../Postulacion/Vista/Vista_Insertar.php");
      
    }
  }
  else{
    session_start();
    $_SESSION["ced"]=$sql_d['cedula'];
    $_SESSION["codi"]=$_POST['codi'];
    header("Location:../../Postulacion_Preguntas/Vista/Pagina1.php");
    
  } 
}

?>