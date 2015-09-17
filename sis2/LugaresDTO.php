<?php
class ProductoDTO{
	private $id;
	private $longitud;
	private $latitud;
	private $fecha;
      private $num;
	
		public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getlongitud(){
		return $this->longitud;
	}
	
	public function setlongitud($longitud){
		$this->longitud = $longitud;
	}
	
	public function getlatitud(){
		return $this->latitud;
	}
	
	public function setlatitud($latitud){
		$this->latitud = $latitud;
	}
	
	public function getfecha(){
		return $this->fecha;
	}
	
	public function setfecha($fecha){
		$this->fecha = $fecha;
	}
	public function getnum(){
		return $this->num;
	}
	
	public function setnum($num){
		$this->num = $num;
	}
	

}