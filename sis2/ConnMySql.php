<?php

	class ConnMySql  
{
	var $con;
	
	function __construct()
	{
		
		$conection['server']="localhost";  
		$conection['user']="root";         
		$conection['pass']="";             
		$conection['base']="test";          
		
		$conect= mysql_connect($conection['server'],$conection['user'],$conection['pass']);

		
		if ($conect) 
		{	
			mysql_select_db($conection['base']);			
			$this->con=$conect;
		}
	}
	
	
	function getConexion()
	{	
		return $this->con;
	}

	
	function Close()
	{
		mysql_close($this->con);
	}	
}
?>
