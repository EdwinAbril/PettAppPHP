<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<?php

    require_once("../Modelo/Modelo_Animal.php");
    $mostrar= new MetodoAnimal();
    $where="";


    if (isset($_POST['buscar'])){

      $where="";
      $raza=$_POST['xraza'];
      $genero=$_POST['xgenero'];
      $tamano=$_POST['xtamano'];

      if ((empty($_POST['xraza']))&&(empty($_POST['xtamano']))&&(empty($_POST['xgenero']))){
        $where="";
        $resultado=$mostrar->MostrarAnimal($where);
      }
      else if ((empty($_POST['xraza']))&&(empty($_POST['xgenero']))){
        $where="where tamaño='".$tamano."'";
        $resultado=$mostrar->MostrarAnimal($where);
      }
      else if ((empty($_POST['xraza']))&&(empty($_POST['xtamano']))){
        $where="where genero='".$genero."'";
        $resultado=$mostrar->MostrarAnimal($where);

      $tipo=$_POST['xtipo'];
      if ((empty($_POST['xraza']))&&(empty($_POST['xtamano']))&&(empty($_POST['xgenero']))&&(empty($_POST['xtipo']))){
        $where="";
      }
      else if ((empty($_POST['xraza']))&&(empty($_POST['xgenero']))&&(empty($_POST['xtipo']))){
        $where="where tamano='".$tamano."'"; 
      }
      else if ((empty($_POST['xraza']))&&(empty($_POST['xtamano']))&&(empty($_POST['xtipo']))){
        $where="where genero='".$genero."'";

      }
      else if ((empty($_POST['xgenero']))&&(empty($_POST['xtamano']))&&(empty($_POST['xtipo']))){
        $where="where raza_animal='".$raza."'";

        $resultado=$mostrar->MostrarAnimal($where);
      }
      else if (empty($_POST['xraza'])){
        $where="where tamaño='".$tamano."' and genero='".$genero."'";
        $resultado=$mostrar->MostrarAnimal($where);

      }
      else if ((empty($_POST['xgenero']))&&(empty($_POST['xtamano']))&&(empty($_POST['xraza']))){
        $where="where tipo_animal='".$tipo."'";

      }
      else if (empty($_POST['xraza'])&&(empty($_POST['xtipo']))){
        $where="where tamano='".$tamano."' and genero='".$genero."'";
      }
      else if (empty($_POST['xtamano'])&&(empty($_POST['xtipo']))){
        $where="where raza_animal ='".$raza."' and genero='".$genero."'";

        $resultado=$mostrar->MostrarAnimal($where);
      }
      else if (empty($_POST['xgenero'])){
        $where="where raza_animal ='".$raza."' and tamaño='".$tamano."'";
        $resultado=$mostrar->MostrarAnimal($where);
      }
      
      else{
        $where="where raza_animal ='".$raza."' and tamaño='".$tamano."' and genero='".$genero."'";
        $resultado=$mostrar->MostrarAnimal($where);
      }

    }
    else{
      $where="";
      $resultado=$mostrar->MostrarAnimal($where);
    }
?>

      }
      else if (empty($_POST['xgenero'])&&(empty($_POST['xtipo']))){
        $where="where raza_animal ='".$raza."' and tamano='".$tamano."'";
      }
      else if (empty($_POST['xraza'])&&(empty($_POST['xtipo']))){
        $where="where genero ='".$genero."' and tamano='".$tamano."'";
      }
      else if (empty($_POST['xgenero'])&&(empty($_POST['xraza']))){
        $where="where tipo_animal ='".$tipo."' and tamano='".$tamano."'";
      }
      else if (empty($_POST['xgenero'])&&(empty($_POST['xtamano']))){
        $where="where tipo_animal ='".$tipo."' and raza_animal='".$raza."'";
      }
      else if (empty($_POST['xgenero'])&&(empty($_POST['xraza']))){
        $where="where tipo_animal ='".$tipo."' and tamano='".$tamano."'";
      }
      else if (empty($_POST['tamano'])&&(empty($_POST['xraza']))){
        $where="where tipo_animal ='".$tipo."' and genero='".$genero."'";
      }
      else if (empty($_POST['xtipo'])){
        $where="where tamano ='".$tamano."' and raza_animal='".$raza."' and genero ='".$genero."'";
      }
      else if (empty($_POST['xtamano'])){
        $where="where tipo_animal ='".$tipo."' and raza_animal='".$raza."' and genero ='".$genero."'";
      }
      else if (empty($_POST['xtipo'])){
        $where="where tamano ='".$tamano."' and raza_animal='".$raza."' and genero ='".$genero."'";
      }
      else if (empty($_POST['xraza'])){
        $where="where tamano ='".$tamano."' and tipo_animal='".$tipo."' and genero ='".$genero."'";
      }
      else if (empty($_POST['xgenero'])){
        $where="where tamano ='".$tamano."' and tipo_animal='".$tipo."' and raza_animal ='".$raza."'";
      }
      else{
        $where="where raza_animal ='".$raza."' and tamano='".$tamano."' and genero='".$genero."' and tipo_animal='".$tipo."'";
      }
    }
      else{
        $where="";
      }


    
    ?>

