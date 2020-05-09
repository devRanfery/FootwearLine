<?php 
	require("../db/conect_db.php");

	//OBTENER LOS DATOS DEL FORMULARIO
	$genero = $_POST['genero'];
	$nombre = $_POST['nombre'];



	$sql = "INSERT INTO categorias values ('','$nombre','$genero')";

	$consulta = mysqli_query($conexion, $sql);

	if ($consulta) {
		echo ' <script language="javascript">alert("La categoria se agrego correctamente");
			location.href="categoria.php";
		</script> ';
	}else{
		 printf("Errormessage: %s\n", $conexion->error);
		echo ' <script language="javascript">alert("Ocurrio un error al agregar el producto");</script> ';
	}
	
 ?>