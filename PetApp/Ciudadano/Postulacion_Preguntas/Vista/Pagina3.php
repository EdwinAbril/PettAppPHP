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
    $cod=$_SESSION["codi"];
    }
	?>
  	<?php
	$r1=$_POST["res1"];
	$r2=$_POST["res2"];
	$r3=$_POST["res3"];
	$r4=$_POST["res4"];
	$r5=$_POST["res5"];
	$r6=$_POST["res6"];
	$r7=$_POST["res7"];
	$r8=$_POST["res8"];
	$r9=$_POST["res9"];
	$r10=$_POST["res10"];
	$r11=$_POST["res11"];
	$r12=$_POST["res12"];
	$c=$_POST["ced"];

	echo $c;
	?>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Encuesta</h1>
                        <form action="Pagina4.php" method="Post">
			<div class="row">
				<div class="col-md-6">
                                    <fieldset class="form-group">
                                       <div class="row">
                                        <fieldset>
                                            <legend>13. ¿Comprende que al sacar a su mascota a pasear debe recoger las excretas y disponerlas adecuadamente? <abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res13" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res13" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                        </fieldset>
                                    <fieldset>
                                            <legend>14. ¿Se compromete a tener un esquema de vacunación de la mascota actualizado?<abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res14" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res14" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                    </fieldset> 
                                    <fieldset>
                                            <legend>15. ¿Se compromete a tener un esquema de desparasitación de la mascota actualizado?¿En la actualidad tiene mascotas?<abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res15" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res15" id="r2" value="0"><label for="r2">No</label>
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
                                            <legend>16. ¿Comprende que mediante la Ley 1774 de 2016, se puede llegar a sancionar he incluso penalizar el maltrato animal? <abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res16" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res16" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                        </fieldset>
                                    <fieldset>
                                            <legend>17. ¿Comprende que la mascota que está dispuesto a adoptar es una responsabilidad que asume por el resto de la vida del animal? <abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res17" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res17" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                    </fieldset> 
                                    <fieldset>
                                            <legend>18. ¿En caso de enfermarse la mascota está dispuesto a brindar atención médica veterinaria y asumir los costos que esta requiera?<abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res18" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res18" id="r2" value="0"><label for="r2">No</label>
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
					 <input type='hidden' name='res7' value='".$r7."'>
					 <input type='hidden' name='res8' value='".$r8."'>
					 <input type='hidden' name='res9' value='".$r9."'>
					 <input type='hidden' name='res10' value='".$r10."'>
					 <input type='hidden' name='res11' value='".$r11."'>
					 <input type='hidden' name='res12' value='".$r12."'>
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