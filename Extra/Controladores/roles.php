<?php require_once '../Modelos/rol.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

 if ($accion !='')
 {
 	/*Se crea el objeto de la clase rol*/
 	$rol = new Rol();

 	switch ($accion)
 	{
 		case 'Ingresar':
 		   $rol->nombre = $_POST['nombre'];
 		   $rol->apePaterno = $_POST['apePaterno'];
 		   $rol->apeMaterno = $_POST['apeMaterno'];
         $rol->nickName = $_POST['nickName'];
         $rol->ciudad = $_POST['ciudad'];
         $rol->telefono = $_POST['telefono'];
         $rol->email = $_POST['email'];
 		   //$rol->edad = $_POST['edad'];
 		   $rol->ingresar();
 		   break;
 		case 'Editar':
 		   $rol->id= base64_decode($_POST['id']);
 		   $rol->nombre= $_POST['nombre'];
           $rol->apePaterno= $_POST['apePaterno'];
           $rol->apeMaterno= $_POST['apeMaterno'];
           $rol->nickName = $_POST['nickName'];
           $rol->ciudad= $_POST['ciudad'];
           $rol->telefono = $_POST['telefono'];
           $rol->email = $_POST['email'];
           //$rol->edad = $_POST['edad'];
           $rol->editar();
           break;
        case 'elim':
           $rol->id = base64_decode($_GET['id']);
           $rol->eliminar();
           break;
 	}
 }
 header('Location: ../Vistas/Roles');