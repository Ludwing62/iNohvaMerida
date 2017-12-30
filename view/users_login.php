
<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../lib/css/style.css">
</head>
<body>
<?php include '../lib/navbar/user_nav.php' ?>
	<div class="error">
		<span>Datos de ingreso no validos, intentalo de nuevo</span>
	</div>

	<div class="main">
		<form action="" id="formlg">
			<input type="text" name="usuariolg" placeholder="Usuario" required pattern="[A-Za-z0-9_-]{1,15}">
			<input type="password" name="passlg"  placeholder="Contraseña" required pattern="[A-Za-z0-9_-]{1,15}">
			<input type="submit" class="botonlg" value="Inicar Sesiòn">
		</form>
	</div>
	<script type="text/javascript" src="../lib/js/jquery.js"></script>
	<script type="text/javascript" src="../lib/js/login.js"></script>
</body>
</html>