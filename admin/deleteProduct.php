<?php 
	require("../db/conect_db.php");

	//OBTENER LOS DATOS DEL FORMULARIO
	$id = $_POST['id'];
	$sql = "DELETE FROM productos WHERE Id = '$id'";

	$consulta = mysqli_query($conexion, $sql);

	if ($consulta) {
		return true;
	}else{
		return false;
	}
 ?>