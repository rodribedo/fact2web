<?php
class Factura
{
	private $numero;
	private $idcliente;
	private $idusuario;
	private $Conexion;
	
	public function setNumero($numero)
	{
		$this->numero=$numero;
	}
	
	public function getNumero()
	{
		return ($this->numero);
	}
	
	public function setIdcliente($idcliente)
	{
		$this->idcliente=$idcliente;
	}
	
	public function getIdcliente()
	{
		return ($this->idcliente);
	}
	
	public function setIdusuario($idusuario)
	{
		$this->idusuario=$idusuario;
	}
	
	public function getIdusuario()
	{
		return ($this->idusuario);
	}
	
	
	
	
	
	
	public function Factura()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearFactura($numero,$idcliente,$idusuario)
	{
		$this->numero=$numero;
		$this->idcliente=$idcliente;
		$this->idusuario=$idusuario;
		
	}
	
	public function agregarFactura()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into factura(FACNumero,FACFecha,FACidUsuario,FACidCliente)
values ('$this->numero', NOW(),'$this->idusuario','$this->idcliente')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	
	
	
	
	
	
	public function consultarFacturas()
	{
		$this->Conexion=Conectarse();
		$sql="select * from factura where FACidUsuario={$_SESSION['user_id']} ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarFactura($numero)
	{
		$this->Conexion=Conectarse();
		$sql="select * from factura where FACNumero='$numero'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>
