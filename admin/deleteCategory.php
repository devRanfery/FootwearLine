<?php 
	require("../db/conect_db.php");

	//OBTENER LOS DATOS DEL FORMULARIO
	$id = $_POST['id'];
	$sql = "DELETE FROM categorias WHERE Id_Cat = '$id'";

	$consulta = mysqli_query($conexion, $sql);

	if ($consulta) {
		return true;
	}else{
		return false;
	}
 ?>