<?php
    require_once '../../Modelos/rol.php';
    $rol = Rol::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Roles</title>
	<link rel="stylesheet" type="text/css" href="css/estilos3.css">
</head>
<body>
	<header>
		<h1 id="hroles">Roles</h1>
		<h2 id="hlistar">Editar</h2>
	</header>
	<form action="../../Controladores/roles.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre" value="<?= $rol[1] ?>" required autofocus/>
		<input name="apePaterno" placeholder="ApePaterno" value="<?= $rol[2] ?>" required autofocus/>
		<input name="apeMaterno" placeholder="ApeMaterno" value="<?= $rol[3] ?>" required autofocus/>
		<input name="nickName" placeholder="NickName" value="<?= $rol[4] ?>" required autofocus/>
		<input name="ciudad" placeholder="Ciudad" value="<?= $rol[5] ?>" required autofocus/>
		<input name="telefono" placeholder="Telefono" value="<?= $rol[6] ?>" required autofocus/>
		<input name="email" placeholder="Email" value="<?= $rol[7] ?>" required autofocus/>
		<input name="a" type="submit" value="Editar" />
	</form>
	<footer id="pie">
		Derechos reservados &copy; José Guadalupe Gómez Gómez 2021
	</footer>
</body>
</html>