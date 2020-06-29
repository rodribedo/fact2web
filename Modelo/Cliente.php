<?php
class Cliente
{
	private $identificacion;
	private $nombres;
	private $apellidos;
	private $usuario;
	private $direccion;
	private $telefono;
	private $correo;
	private $Conexion;
	
	public function setIdentificacion($identificacion)
	{
		$this->identificacion=$identificacion;
	}
	
	public function getIdentificacion()
	{
		return ($this->identificacion);
	}
	
	public function setNombres($nombres)
	{
		$this->nombres=$nombres;
	}
	
	public function getNombres()
	{
		return ($this->nombres);
	}
	
	public function setApellidos($apellidos)
	{
		$this->apellidos=$apellidos;
	}
	
	public function getApellidos()
	{
		return ($this->apellidos);
	}
	
	public function setUsuario($usuario)
	{
		$this->sexo=$usuario;
	}
	
	public function getUsuario()
	{
		return ($this->usuario);
	}
	
	public function setDireccion($direccion)
	{
		$this->direccion=$direccion;
	}
	
	public function getDireccion()
	{
		return ($this->direccion);
	}

	
	public function setTelefono($telefono)
	{
		$this->telefono=$telefono;
	}
	
	public function getTelefono()
	{
		return ($this->telefono);
	}
	
	public function setCorreo($correo)
	{
		$this->correo=$correo;
	}
	
	public function getcorreo()
	{
		return ($this->correo);
	}
	
	public function Cliente()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearCliente($identificacion,$nombres,$apellidos, $usuario,$direccion,$telefono,$correo)
	{
		$this->identificacion=$identificacion;
		$this->nombres=$nombres;
		$this->apellidos=$apellidos;
		$this->usuario=$usuario;
		$this->direccion=$direccion;
		$this->telefono=$telefono;
		$this->correo=$correo;
	}
	
	public function agregarCliente()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into cliente(CLINit,CLINombre,CLIApellido,CLIidUsuario,CLIDireccion,CLITelefono,CLIMail)
values ('$this->identificacion','$this->nombres','$this->apellidos','$this->usuario','$this->direccion','$this->telefono','$this->correo')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarClientes()
	{
		$this->Conexion=Conectarse();
		$sql="select CLINit,CLINombre,CLIApellido,CLIidUsuario,CLIDireccion,CLITelefono,CLIMail from cliente where CLIidUSUARIO={$_SESSION['user_id']} ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarCliente($identificacion)
	{
		$this->Conexion=Conectarse();
		$sql="select * from cliente where CLINit='$identificacion'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>
