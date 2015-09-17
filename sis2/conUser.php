<?php
require 'LugaresDAO.php';
require 'LugaresDAOImpl.php';
require 'LugaresDTO.php';


@$idu = $_POST['idu'];
@$nombre = $_POST['nombre']; 
@$detalle = $_POST['detalle'];
@$precio = $_POST['precio'];
@$estado = $_POST['estado'];
@$stock = $_POST['stock'];
@$categoria = $_POST['categoria'];
@$imagen = $_POST['imagen'];

@$val = $_POST['1'];
@$id = $_GET['id'];
@$v2 = $_GET['v2'];
@$v3 = $_POST['v3'];

	if($val==1){
		
		$udto = new LugaresDTO();
		$udto->setlatitud($nombre);
		$udto->setlongitud($detalle);
		$udto->setfecha($precio);
	      $udto->setnum($estado);		
	
		$udao = new LugaresDAOImpl();
		
		
		
	}
	

function getAllFuncionario(){
	$udao = new LugaresDAOImpl();
	return $udao->getAllLugares();
}

?>