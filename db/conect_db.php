<?php


		$conexion = new MySQLi("localhost", "root","", "footwear_line");
		if ($conexion -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $conexion -> mysqli_connect_errno() 
				. ") " . $conexion -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>