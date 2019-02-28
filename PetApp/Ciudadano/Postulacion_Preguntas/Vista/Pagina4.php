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
	$r13=$_POST["res13"];
	$r14=$_POST["res14"];
	$r15=$_POST["res15"];
	$r16=$_POST["res16"];
	$r17=$_POST["res17"];
	$r18=$_POST["res18"];
	$c=$_POST["ced"];

	echo $c;
?>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Encuesta</h1>
            <form action="../Controlador/Contolador_RespuestaFin.php" method="Post">
			<div class="row">
				<div class="col-md-6">
                                    <fieldset class="form-group">
                                       <div class="row">
                                        <fieldset>
                                            <legend>19. ¿Se compromete a mantener informada a la Secretaría de Ambiente y Desarrollo Agropecuario sobre cualquier novedad que se presente con la mascota? <abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res19" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res19" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                        </fieldset>
                                    <fieldset>
                                            <legend>20. ¿Se compromete a brindar amor y respeto a la mascota? <abbr title="This field is mandatory"></abbr></legend>
                                            <div class="col-sm-12">
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res20" id="r1" value="1" ><label for="r1">Si </label>
					        </div>
					        <div class="form-check" style="margin-left:20px;">
					          <input type="radio" required name="res20" id="r2" value="0"><label for="r2">No</label>
					          </label>
					        </div>
					      </div>
                                    </fieldset> 
                                   </fieldset>
                                </div>
			</div>
                    <input type='submit' name='fin' value='Finalizar' class='btn btn-primary active btn-sm'>
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
					 <input type='hidden' name='res13' value='".$r13."'>
					 <input type='hidden' name='res14' value='".$r14."'>
					 <input type='hidden' name='res15' value='".$r15."'>
					 <input type='hidden' name='res16' value='".$r16."'>
					 <input type='hidden' name='res17' value='".$r17."'>
					 <input type='hidden' name='res18' value='".$r18."'>
					 <input type='hidden' name='ced' value='".$c."'>
					 <input type='hidden' name='codi' value='".$cod."'>
					";
					?>
                    
                    </form>
                    <input type='submit' name='volve' value='Volver' class='btn btn-danger btn-sm'>
                </div>
                <?php
        if(isset($_POST['fin']))
        {
        	echo "<script type='text/javascript'>;
        	swal('".$result."');
        	</script>";
        }
    ?>
	</div>
</div>
</body>
</html>