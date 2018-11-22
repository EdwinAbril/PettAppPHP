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


                <form action="../../Eventos/Vista/Vista_Eventos.php">
                    <input type="image" name="eventis" src="logos/eventis.png" height="100" width="100" id="eventos">
                </form>

                <form action="../../Animales/Vista/Vista_Animal.php">
                    <input type="image" name="eventis" src="logos/Adoptar.png" height="100" width="100" id="animales">
                </form>

                <form action="../../Denuncias/Vista/Vista_Denuncias.php">
                    <input type="image" name="eventis" src="logos/Denuncia.png" height="100" width="100" id="denuncia">
                </form>

                <form action="../../Mascotas/Vista/Vista_Mascotas.php">
                    <input type="image" name="eventis" src="logos/Mascota.png" height="100" width="100" id="mascota">
                </form>

                <form action="../Vista/Vista_Ciudadano.php">
                    <input type="image" name="eventis" src="logos/MisDatos.png" height="100" width="100" id="datos">
                </form>


	</header>

  

</body>
</html>
