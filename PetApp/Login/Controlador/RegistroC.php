<?php
require_once("../Modelo/Registro.php");
?>
<?php

			$mostrar= new MetodoRegistro();

				if (isset($_POST['Entrar'])) {
				$do=$_POST['CedulaCiu'];
				$no=$_POST['Usuario'];
				$co=$_POST['clave'];
				$ro=4;
				$mens=$mostrar->Registrar($do,$no,$co,$ro);
				echo "<script type='text/javascript'>
				alert('".$mens."');
				</script>";

				//echo $mens;
				}
			?>