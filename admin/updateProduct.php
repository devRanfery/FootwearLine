<?php 
	require("../db/conect_db.php");

  //OBTENER LOS DATOS DEL FORMULARIO
  $id = $_POST['nId'];
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
  $categoria = intval($categoria);

  
  $sql = "UPDATE productos
	SET
  `N_Producto` = '$nombre',
	`Descripcion` =  '$descripcion',
	`Precio` = '$precio',
	`Imagen` = 'images/$imagen',
	`Estatus` = '$estado',
	`Id_Cat` = '$categoria'
	WHERE Id = $id;";

	$consulta = mysqli_query($conexion, $sql);

	if ($consulta) {
		echo ' <script language="javascript">alert("El producto se actualizo correctamente");
			location.href="productos.php";
		</script> ';
	}else{
		 printf("Errormessage: %s\n", $conexion->error);
		echo ' <script language="javascript">alert("Ocurrio un error al agregar el producto");</script> ';
	}
	
 ?>