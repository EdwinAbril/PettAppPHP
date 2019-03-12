<!DOCTYPE html>
<html>
<head>

  <title>Denuncias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.css" rel="stylesheet">
  <link href="../../../Bst/4.3.1/CSS/bootstrap.min.css" rel="stylesheet">
  <script src="../../../Bst/4.3.1/js/bootstrap.min.js"></script>
  <script src="../../../Bst/4.3.1/js/scripts.js"></script>
  <link rel="stylesheet" href="CSS/Estilos.css">
  <script src="JS/jquery-3.3.1.min.js"></script>
  <script src="JS/main.js"></script>
  <script type="text/javascript">history.forward();</script>
</head>
<body>
  <?php
  session_start();
  if (!$_SESSION) {
    echo '
      <script type="text/javascript">
      alert("Usuario no Autenticado");
      location="../../../Login/Vista/login.php";
      </script>
    ';  
  }
  else{
    $usuar=$_SESSION["Usuario"];
  }
  ?>
  <form action="../../Menu/Vista/Administrador.php">
    <input type="submit" name="volver" value="Volver" class="btn btn-outline-dark" id="vol">
  </form>
  <form action="../../../Cerrar.php">
    <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
  </form>
  <h3 class="display-4">Denuncias</h3>
  <?php
  require_once("../Controlador/Controlador_Denuncias.php");
  while($Com=mysqli_fetch_row($resultado)){
    echo "
      <div id='centro'>
        <div class='caja1'>
          <table class='table'>
            <thead class='thead-dark'>
              <tr>
                <th>".$Com[1]."-Cedula: ".$Com[3]."</th>
              </tr>
            </thead>
          </table>
        </div>

        <div class='caja2'>
          <table class='table'>
            <tr>
              <th>Codigo</th>
              <th>".$Com[0]."</th>
            </tr>
            <tr>
              <th>Fecha</th>
              <th>".$Com[1]."</th>
            </tr>
            <tr>
              <th>Tipo</th>
              <th>".$Com[2]."</th>
            </tr>
            <tr>
              <th>Cedula</th>
              <th>".$Com[3]."</th>
            </tr>
            <tr>
              <th>Denuncia</th>
              <th>".$Com[4]."</th>
            </tr>
            <tr>
              <th>Evidencia</th>
              <th colspan='2'>
                <img src='../../../Administrador/Evidencias_Denuncias/".$Com[5]."' width='300px' heigth='300px'>
              </th>
            </tr>
            <tr>					
              <form method='POST' action='Vista_Respuesta.php'>
                <input type='hidden' name='ceduladenun' value='".$Com[3]."'>
                <th><input type='submit' name='aceptarden' class='btn btn-primary' value='Responder'></th>
              </form> 
              <form method='POST' action='../Controlador/Controlador_Rechazar.php'>
                <input type='hidden' name='cedurech' value='".$Com[3]."'>
                <input type='hidden' name='codi' value='".$Com[0]."'>
                <input type='hidden' name='mensajerech' value='Su denuncia no fue aceptada podra comunicarse por medio de la informacion de contacto en el menu principal'>
                <th><input type='submit' name='rechazarden' class='btn btn-danger'value='Rechazar'></th>
              </form>
            </tr>
          </table>
        </div>
        <div class='opciones'>
          <table class='table'>
            <tr>
              <th>Opciones Avanzadas</th>
            </tr>
          </table>
        </div>
        <div class='iconos'>
          <table class='table'>
            <tr>
              <form method='POST' action='Modificar_Denuncias.php'>
                <input type='hidden' name='usu' value='".$Com[0]."'>
                <th><input type='image' src='Imagenes/editar.png' name='modificar' value='Modificar' class='btn btn-link' height='60' width='60'></th>
              </form>
              <form method='POST' action='../Controlador/Controlador_Rechazar.php'>
                <input type='hidden' name='codi' value='".$Com[0]."'>
                <th><input type='image' src='Imagenes/borrar.png' name='eliminar' value='Eliminar' class='btn btn-link' height='60' width='60'></th>
              </form>
            </tr>
          </table>
        </div>
      </div>
    ";
    ?>
    <?php }
    if(isset($_POST['eliminar'])){
      echo"
        <script type='text/javascript'>;
        alert('".$result."');
        </script>
      ";
    }
    ?>
</body>
</html>