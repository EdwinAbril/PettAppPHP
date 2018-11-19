<?php
session_start();
	$usuar=$_SESSION["Usuario"];
	if ($usuar) {
		session_destroy();
		echo "<script type='text/javascript'>alert('Su sesion ha terminado');
		onclick=self.location='Login/Vista/registro.php'</script>";	
	}
	else{
		echo "<script type='text/javascript'>
		alert('Usuario no Autenticado');
		location='Login/Vista/login.php';
		</script>";	
	}
?>