<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<?php

    require_once("../Modelo/Modelo_Animal.php");
    $mostrar= new MetodoAnimal();
    $where="";


    if (isset($_POST['buscar'])){

      $where="";
      $genero=$_POST['xgenero'];
      $tamano=$_POST['xtamano'];
      $tipo=$_POST['xtipo'];
      if ((empty($_POST['xtamano']))&&(empty($_POST['xgenero']))&&(empty($_POST['xtipo']))){
        $where="";
      }
      else if ((empty($_POST['xgenero']))&&(empty($_POST['xtipo']))){
        $where="where tamano='".$tamano."'"; 
      }
      else if ((empty($_POST['xtamano']))&&(empty($_POST['xtipo']))){
        $where="where genero='".$genero."'";
      }
      else if ((empty($_POST['xgenero']))&&(empty($_POST['xtamano']))){
        $where="where tipo_animal='".$tipo."'";
      }
      else if (empty($_POST['xtipo'])){
        $where="where tamano ='".$tamano."' and genero ='".$genero."'";
      }
      else if (empty($_POST['xtamano'])){
        $where="where tipo_animal ='".$tipo."' and genero ='".$genero."'";
      }
      else if (empty($_POST['xgenero'])){
        $where="where tamano ='".$tamano."' and tipo_animal='".$tipo."'";
      }
      else{
        $where="where tamano='".$tamano."' and genero='".$genero."' and tipo_animal='".$tipo."'";
      }

    }
    else{
      $where="";
    }
    $resultado=$mostrar->MostrarAnimal($where);
?>

      
    

