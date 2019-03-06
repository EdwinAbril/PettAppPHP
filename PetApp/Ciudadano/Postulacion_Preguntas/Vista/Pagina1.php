<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preguntas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
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
    $cod=$_SESSION["codi"];
    }

    require_once("../Controlador/Contolador_Cedula.php");
	while($Usc=mysqli_fetch_row($resultado2)){
	?>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Encuesta</h1>
                        <form action="Pagina2.php" method="Post">
			<div class="row">
				<div class="col-md-6">
                                    <fieldset class="form-group">
                                       <div class="row">
                                        <fieldset>
                                            <legend>1. ¿Tienen todos los miembros de la familia conocimiento de la adopción?<abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res1" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res1" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                        </fieldset>
                                    <fieldset>
                                            <legend>2. ¿Ha tenido mascotas anteriormente?<abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res2" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res2" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                    </fieldset> 
                                    <fieldset>
                                            <legend>3. ¿En la actualidad tiene mascotas?<abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res3" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res3" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
                                            </div>
					    </div>
                                    </fieldset>
                                    </fieldset>
                                </div>
                           <div class="col-md-6">
                                    <fieldset class="form-group">
                                       <div class="row">
                                        <fieldset>
                                            <legend>4. ¿Vive en casa propia?<abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res4" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res4" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                        </fieldset>
                                    <fieldset>
                                            <legend>5. ¿Su vivienda cuenta con el espacio suficiente para la mascota que desea adoptar?<abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res5" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res5" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                    </fieldset> 
                                    <fieldset>
                                            <legend>6¿Cuenta con tiempo suficiente a diario para compartir con la mascota?<abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res6" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res6" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                            </div>
                                    </fieldset>
                                    </fieldset>
                                </div>
			</div>
                    <input type='submit' name='sigui' value='Siguiente' class='btn btn-primary active btn-sm'>

                    <?php
						 echo"
						 <input type='hidden' name='ced' value='".$Usc[0]."'>
						 <input type='hidden' name='codi' value='".$cod."'>
						 ";
						}
						?>
                        </form>
                    <input type='submit' name='volve' value='Volver' class='btn btn-danger btn-sm'>
                </div>
	</div>
</div>
                
  </body>
</html>
