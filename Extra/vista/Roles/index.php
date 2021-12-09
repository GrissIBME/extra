<?php require_once '../../Modelos/rol.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Miembros</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
	<header>
		<h1 id="hroles">Catalogo de miembros</h1>
		<h2 id="hlistar">Lista de miembros</h2>
	</header>

	<div id="divnuevo">
		<a id="anuevo" href="ingresar.php">Ingresar miembro</a>
	</div>
	<br>

	<table id="roles" border="1" collapse>
		<thead>
			<tr>
				<th>User</th>
				<th>Nombre</th>
				<th>ApePaterno</th>
				<th>ApeMaterno</th>
				<th>NickName</th>
				<th>Ciudad</th>
				<th>Telefono</th>
				<th>Email</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
	<tbody>
		<?php foreach (Rol::listar() as $fila) { ?>
			<tr>
				<td id="id"><?= $fila[0] ?></td>
				<td id="Nombre"><?= $fila[1] ?></td>
				<td id="ApePaterno"><?= $fila[2] ?></td>
				<td id="ApeMaterno"><?= $fila[3] ?></td>
				<td id="NickName"><?= $fila[4] ?></td>
				<td id="Ciudad"><?= $fila[5] ?></td>
				<td id="Telefono"><?= $fila[6] ?></td>
				<td id="Email"><?= $fila[7] ?></td>

				<div id="opciones" width="50" height="50">
					<td>
						<a id="aeditar" href="editar.php?id=<?=base64_encode($fila [0])?>">Editar</a>
					</td>
				</div>
				<td>
					<a id="aeliminar" href="../../Controladores/roles.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
	</table>
	<section class="container text-center" id="cont">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!--vue.resource-->
                    <!--Recorrer el arreglo de datos para poder ver los resultados-->
                    <hr/>
                    <!--axios-->
                    <h2>Interesados</h2>
                    <img v-for="persona in personasAxios" v-bind:src="persona.picture.thumbnail" :title="persona.name.first">
                    <hr/>
                </div>
            </div>
        </section>

        <script src="vue.js"></script>
        <script src="funciones.js"></script>

	<footer id="pie">
		© &copy; @ReyIbme
	</footer>
</body>
</html>