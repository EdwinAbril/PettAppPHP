<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Preguntas</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
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
    }
	?>

  	<?php
	$r1=$_POST["res1"];
	$r2=$_POST["res2"];
	$r3=$_POST["res3"];
	$r4=$_POST["res4"];
	$r5=$_POST["res5"];
	$r6=$_POST["res6"];
	$c=$_POST["ced"];
	$cod=$_POST["codi"];
    ?>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Encuesta</h1>
                        <form action="Pagina3.php" method="Post">
			<div class="row">
				<div class="col-md-6">
                                    <fieldset class="form-group">
                                       <div class="row">
                                        <fieldset>
                                            <legend>7. ¿En el núcleo familiar  alguna persona es alérgica a los animales?<abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res7" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res7" id="r2" value="0"><label for="r2">Naur</label>
					          </label>
					        </div>
					      </div>
                                        </fieldset>
                                    <fieldset>
                                            <legend>8. ¿Reconoce que en caso de mudarse de la propiedad actual, debe llevarse con usted a la mascota? <abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res8" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res8" id="r2" value="0"><label for="r2">Naur</label>
					          </label>
					        </div>
					      </div>
                                    </fieldset> 
                                    <fieldset>
                                            <legend>9. ¿Conoce los gastos económicos que implica tener una mascota? <abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res9" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res9" id="r2" value="0"><label for="r2">Naur</label>
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
                                            <legend>10. ¿Está dispuesto a recibir capacitación sobre tenencia responsable de la mascota? <abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res10" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res10" id="r2" value="0"><label for="r2">Naur</label>
					          </label>
					        </div>
					      </div>
                                        </fieldset>
                                    <fieldset>
                                            <legend>11. ¿Comprende que la mascota tiene un periodo de adaptación y debe ser paciente mientras esto ocurre? <abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res11" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res11" id="r2" value="0"><label for="r2">Naur</label>
					          </label>
					        </div>
					      </div>
                                    </fieldset> 
                                    <fieldset>
                                            <legend>12. ¿Se compromete a garantizar el bienestar general de la mascota? <abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res12" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res12" id="r2" value="0"><label for="r2">Naur</label>
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
						 <input type='hidden' name='res1' value='".$r1."'>
						 <input type='hidden' name='res2' value='".$r2."'>
						 <input type='hidden' name='res3' value='".$r3."'>
						 <input type='hidden' name='res4' value='".$r4."'>
						 <input type='hidden' name='res5' value='".$r5."'>
						 <input type='hidden' name='res6' value='".$r6."'>
						 <input type='hidden' name='ced' value='".$c."'>
						 <input type='hidden' name='codi' value='".$cod."'>
						 ";
						?>
                    </form>
                    <input type='submit' name='volve' value='Volver' class='btn btn-danger btn-sm'>
                </div>
	</div>
</div>
</body>
</html>