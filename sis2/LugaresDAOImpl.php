<?php

require 'ConnMySql.php';

class LugaresDAOImpl implements LugaresDAO{
	
	
	public function getAllLugares(){
		$cnn = new ConnMySql();
		$con = $cnn->getConexion();
		
		$query = "SELECT * FROM datos ORDER BY num DESC;";
		$result = mysql_query($query);
		/*while ($fila = mysql_fetch_array($result, MYSQL_NUM)) {
    		echo ".l,: ".$fila[0];
			printf("ID: %s  Nombre: %s", $fila[0], $fila[1]);  
		}*/
		return $result;		
	}
	
	public function getLugaresById($iduser){
		$cnn = new ConnMySql();
		$con = $cnn->getConexion();
	
		$query = "SELECT * FROM datos 
				  WHERE id = $iduser;";
		$result = mysql_query($query);
		return $result;
	}

}
?>