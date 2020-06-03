<?php 
session_start();
require("../db/conect_db.php");

$sql="SELECT * FROM productos";
$query=mysqli_query($conexion,$sql);

$sql2="SELECT * FROM categorias";
$categorias = mysqli_query($conexion,$sql2);

$sql3="SELECT * FROM categorias";
$categorias2 = mysqli_query($conexion,$sql3);

 ?>

<!DOCTYPE html>
<html lang="es">
<!-- HEAD -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>FOOTWEAR LINE</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>


</head>
<!-- BODY -->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <?php
  include_once('navbar.php');
  ?>
    <!-- /.navbar -->

    <?php
include_once('aside.php')
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Productos</h1>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SaveProduct">
                Nuevo <small class="fas fa-plus-square"></small>
              </button>
            </div>
          </div>
          <br><br>
          <div class="row">
            <div class="col-md-12">
              <table class="table table-responsive table-striped">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Imagen</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                while($arreglo=mysqli_fetch_array($query)){
                    echo "<tr class='success'>";
                      echo "<td>$arreglo[Id]</td>";
                      echo "<td>$arreglo[N_Producto]</td>";
                      echo "<td>$arreglo[Precio]</td>";
                      echo "<td>$arreglo[Estatus]</td>";
                      echo "<td>$arreglo[Id_Cat]</td>";  
                      echo "<td>$arreglo[Descripcion]</td>"; 
                      echo "<td><img src='../views/$arreglo[Imagen]' width='50px' height='50px'></td>"; 
                      echo "<td><button class='btn btn-success btn-update' id='$arreglo[Id]' data-toggle='modal' data-target='#UpdateProduct'><i class='fas fa-edit'></i></button></td>";
                      echo "<td><button class='btn btn-danger btn-delete' id='$arreglo[Id]'><i class='fas fa-trash-alt'></i></button></td>";
                    echo "</tr>";
                }
               ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!--MODAL SAVE PRODUCT -->
    <div class="modal fade" id="SaveProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="newProduct.php" method="POST">
              <div class="form-group">
                <label>Nombre del producto</label>
                <input type="text" class="form-control" name="nProducto">
              </div>
              <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="nDescripcion">
              </div>
              <div class="form-group">
                <label>Precio</label>
                <input type="text" class="form-control" name="nPrecio">
              </div>
              <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="nCategoria">
                  <!-- <small class="btn-primary"> </small> -->

                  <?php 
                      while($Cat=mysqli_fetch_array($categorias)){
                        
                        echo "<option value=$Cat[Id_Cat]>$Cat[Descripcion]<div class='btn btn-primary'>$Cat[Genero] </div></option>";
                      }

                    ?>

                  <!-- <option value="6">Mocasines</option>
                    <option value="5">Tacones</option> -->

                </select>
              </div>
              <div class="form-group">
                <label>Estado</label>
                <select class="form-control" name="nEstado">
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
                </select>
              </div>
              <label>Imagen</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" name="nImagen">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
              </div>
              <br><br>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL SAVE PRODUCT -->

    <!-- MODA UPDATE PRODUCT -->
    <div class="modal fade" id="UpdateProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="updateProduct.php" method="POST">
              <input type="text" id="id-p" name="nId" style="display:none;">
              <div class="form-group">
                <label>Nombre del producto</label>
                <input type="text" class="form-control" id="nombre-p" name="nProducto">
              </div>
              <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" id="descripcion-p" name="nDescripcion">
              </div>
              <div class="form-group">
                <label>Precio</label>
                <input type="text" class="form-control" id="precio-p" name="nPrecio">
              </div>
              <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" id="categoria-p" name="nCategoria">
                  <?php 
                      while($Cate=mysqli_fetch_array($categorias2)){
                        
                        echo "<option value=$Cate[Id_Cat]>$Cate[Descripcion] <div class='btn btn-primary'>$Cate[Genero] </div></option>";
                      }

                    ?>
                </select>
              </div>
              <div class="form-group">
                <label>Estado</label>
                <select class="form-control" id="estado-p" name="nEstado">
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
                </select>
              </div>
              <label>Imagen</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="imagen-p" name="nImagen">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
              </div>
              <br><br>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL UDPTE PRODUCT -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- Default to the left -->
      <strong>Copyright &copy; 2020 <a href="https://adminlte.io">footwear.com</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->


  <script type="text/javascript">
  $(document).ready(function() {
    $('.btn-update').click(function() {
      var id = $(this).attr('id')
      var dataS = 'id=' + id;
      $.ajax({
        type: "POST",
        url: "../models/AjaxUpdateProduct.php",
        data: dataS,
        success: function(response) {
          data = $.parseJSON(response);
          console.log(data)
          if (data.length > 0) {
            $('#id-p').val(data[0]['Id']);
            $('#nombre-p').val(data[0]['N_Producto']);
            $('#descripcion-p').val(data[0]['Descripcion']);
            $('#precio-p').val(data[0]['Precio']);
            $('#imagen-p').val(data[0]['Imagen']);
            $('#estado-p').val(data[0]['Estatus']);
            $('#categoria-p').val(data[0]['Id_Cat']);
          }
        }

      });
    });
  });


  $(document).ready(function() {
    $('.btn-delete').click(function() {
      var id = $(this).attr('id')
      var dataD = 'id=' + id
      $.ajax({
        url: 'deleteProduct.php',
        data: dataD,
        type: 'POST',
        success: function(response) {
          location.reload();
          alert('Se le elimino correctamente')
        }
      });
    });
  });
  </script>

  <!-- jQuery -->

  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>