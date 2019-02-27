<?php

    require_once("../Modelo/Modelo_Animal.php");
    $mostrar= new MetodoAnimal();
    $where="";


    if (isset($_POST['buscar'])){

      $where="";
      $raza=$_POST['xraza'];
      $genero=$_POST['xgenero'];
      $tamano=$_POST['xtamano'];
      echo '<script type="text/javascript">
          alert("'.$raza.'");
          alert("'.$genero.'");
        alert("'.$tamano.'");     
          </script>';
      if ((empty($_POST['xraza']))&&(empty($_POST['xtamano']))&&(empty($_POST['xgenero']))){
        $where="";
        $resultado=$mostrar->MostrarAnimal($where);
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("0");
          </script>';
      }
      else if ((empty($_POST['xraza']))&&(empty($_POST['xgenero']))){
        $where="where tamaño='".$tamano."'";
        $resultado=$mostrar->MostrarAnimal($where);
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("1");
          </script>'; 
      }
      else if ((empty($_POST['xraza']))&&(empty($_POST['xtamano']))){
        $where="where genero='".$genero."'";
        $resultado=$mostrar->MostrarAnimal($where);
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("2");
          </script>';
      }
      else if ((empty($_POST['xgenero']))&&(empty($_POST['xtamano']))){
        $where="where raza_animal='".$raza."'";
        $resultado=$mostrar->MostrarAnimal($where);
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("3");
          </script>';
      }
      else if (empty($_POST['xraza'])){
        $where="where tamaño='".$tamano."' and genero='".$genero."'";
        $resultado=$mostrar->MostrarAnimal($where);
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("4");
          </script>';
      }
      else if (empty($_POST['xtamano'])){
        $where="where raza_animal ='".$raza."' and genero='".$genero."'";
        $resultado=$mostrar->MostrarAnimal($where);
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("5");
          </script>';
      }
      else if (empty($_POST['xgenero'])){
        $where="where raza_animal ='".$raza."' and tamaño='".$tamano."'";
        $resultado=$mostrar->MostrarAnimal($where);
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("6");
          </script>';
      }
      
      else{
        $where="where raza_animal ='".$raza."' and tamaño='".$tamano."' and genero='".$genero."'";
        $resultado=$mostrar->MostrarAnimal($where);
        echo '<script type="text/javascript">
          alert("'.$where.'");
          alert("7");
          </script>';
      }

    }
    else{
      $where="";
      $resultado=$mostrar->MostrarAnimal($where);
      echo '<script type="text/javascript">
            alert("8");
            </script>';
    }

    
    ?>
