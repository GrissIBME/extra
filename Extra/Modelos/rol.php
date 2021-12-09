<?php require_once 'conexion.php';

class Rol
{
	//Atribitos= Variables
	public $id;
	public $nombre;
	public $apePaterno;
	public $apeMaterno;
	public $nickName;
	public $ciudad;
	public $telefono;
	public $email;
	private $conexion;
	private $observaciones;

	//Constructor
	public function __construct ()
	{
		$this->id = 0;
		$this->nombre = '';
		$this->apePaterno = '';
		$this->apeMaterno = '';
		$this->nickName = '';
		$this->ciudad = '';
		$this->telefono = '';
		$this->email = '';
		$this->conexion = new Conexion();
	}
	//Metodos
	public static function listar()
	{
		$conexion = new Conexion();
		$listado = $conexion->consultar("SELECT * FROM roles");
		$conexion->cerrar();
		return $listado;
	}
	public static function obtenerPorId ($id)
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM roles WHERE Id = $id");
		$conexion->cerrar();
		return $listado[0];
	}
	public function ingresar ()
	{
		$s = "INSERT INTO roles (Nombre,ApePaterno,ApeMaterno,NickName,Ciudad,Dirección,Telefono,Email) VALUES ('$this->nombre'".", '$this->apePaterno'".", '$this->apeMaterno'".", '$this->nickName'".", '$this->ciudad'".", '$this->telefono'".", '$this->email')";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function eliminar ()
	{
		$s = "DELETE FROM roles WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function editar ()
	{
		$s = "UPDATE roles SET Nombre = '$this->nombre'".",ApePaterno= '$this->apePaterno'".",ApeMaterno= '$this->apeMaterno'".",NickName= '$this->nickName'".",Ciudad= '$this->ciudad'".",Telefono= '$this->telefono'".",Email= '$this->email'";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function Agregar()
	{
		ingresar();
	}
}