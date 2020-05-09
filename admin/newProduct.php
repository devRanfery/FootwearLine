<?php 
	require("../db/conect_db.php");

	//OBTENER LOS DATOS DEL FORMULARIO
	$nombre = $_POST['nProducto'];
	$descripcion = $_POST['nDescripcion'];
	$precio = $_POST['nPrecio'];
	$categoria = $_POST['nCategoria'];
	$estado = $_POST['nEstado'];
	$imagen = $_POST['nImagen'];

	// echo $nombre;
	// echo $descripcion;
	// echo $precio;
	// echo $categoria;
	// echo $estado;
	// echo $imagen;


	$sql = "INSERT INTO productos values ('','$nombre','$descripcion', '$precio', 'images/$imagen
	', '$estado', '$categoria')";

	$consulta = mysqli_query($conexion, $sql);

	if ($consulta) {
		echo ' <script language="javascript">alert("El producto se agrego correctamente");
			location.href="productos.php";
		</script> ';
	}else{
		 printf("Errormessage: %s\n", $conexion->error);
		echo ' <script language="javascript">alert("Ocurrio un error al agregar el producto");</script> ';
	}
	
 ?>