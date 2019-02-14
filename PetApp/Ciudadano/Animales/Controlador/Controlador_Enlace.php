<?php

if (isset($_POST['readop'])) {
	echo "Hola perros";
require_once("../Controlador/Controlador_Preguntas.php");
while($Pre=mysqli_fetch_row($resultado)){
  $ce=$Pre[0];
  echo $ce ;
 require_once("../Modelo/Modelo_Preguntas.php");
  $obj= new MetodoPreguntas();
  $con=$obj->Preguntas($ce);
  $num=$con->num_rows;
}
  if ($num>0){
    while($sql_d=$con->fetch_assoc()){
        $_SESSION["res"]=$sql_d['respuesta_fin'];
        $_SESSION["ced"]=$sql_d['cedula'];
        header("Location:../../Postulacion/Vista/Vista_Insertar.php");
      
    }
  }
  else{
    header("Location:../../Postulacion_Preguntas/Vista/Pagina1.php");
  } 
}

?>