<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Estilo.css">
	<title>PetApp</title>
  <script type="text/javascript">history.forward();</script>
</head>
<body>

  <div class="content">
    
  <?php
  session_start();
  if (!$_SESSION) {
    echo '<script type="text/javascript">
          alert("Usuario no Autenticado");
          self.location=../../../Login/Vista/login.php;
          </script>';  
  }
  else{
    $usuar=$_SESSION["Usuario"];
    echo "<h1> Bienvenido: ".$usuar."</h1>";
    }
  ?>
	<header id="encabezado">
    <form action="../../../Cerrar.php">
    <input type="submit" name="cerrar" value="Cerrar Sesion" class="btn btn-light" id="sal">
    </form>
		<h1>Ciudadano</h1>
		<img src="Logos/Mujer.png" height="300" width="300" id="Avatar" >
      </header>

        <div id="cajas">

          <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
              <form action="../../Eventos/Vista/Vista_Eventos.php">
                <center>  
                <input type="image" name="eventoss" src="logos/eventis.png" height="250" width="250" id="eventos">
              </center>
              </form>
            </div>
          </div>

        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center"> 
              <form action="../../Animales/Vista/Vista_Animal.php">
              <center>
              <input type="image" name="animal" src="logos/Adoptar.png" height="250" width="250" id="animales">
              </center>
              </form>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12" id="caja1">
          <div class="panel panel-default text-center">
              <form action="../../Denuncias/Vista/Vista_Denuncias.php">
                <center>
                <input type="image" name="denuncia" src="logos/Denuncia.png" height="250" width="250" id="denuncia">
              </center>
              </form>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
              <form action="../../Mascotas/Vista/Vista_Mascotas.php">
                <center>
                <input type="image" name="mascotas" src="logos/Mascota.png" height="250" width="250" id="mascota">
                </center>
               </form>
          </div>
        </div>

          <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <form action="../Vista/Vista_Ciudadano.php">
                  <center>
                  <input type="image" name="datos" src="logos/MisDatos.png" height="250" width="250" id="datos">
                </center>
                </form>
              </div>
            </div>

      </div>
    </div>

</body>
</html>
