<?php 
session_start();
require("../db/conect_db.php");

$sql="SELECT * FROM categorias";
$category=mysqli_query($conexion,$sql);

 ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<!-- HEAD -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>FOOTWEAR LINE</title>

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

    <!-- Aside -->
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
              <h1 class="m-0 text-dark">Categoria</h1>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- <div class="col-md-2"></div> -->
            <div class="col-md-8">
              <form action="newCategory.php" method="POST">
                <div class="form-group">
                  <label>Descripcion</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
                <div class="form-group">
                  <label>Genero</label>
                  <select class="form-control" name="genero">
                    <option value="CABALLERO">Caballero</option>
                    <option value="DAMA">Dama</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>
            </div>
            <div class="col-md-4">
              <table class="table table-responsive table-striped" style="height: 300px;">
                <thead>
                  <tr>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Genero</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                while($arreglo=mysqli_fetch_array($category)){
                    echo "<tr class='success'>";
                      echo "<td>$arreglo[Descripcion]</td>";
                      echo "<td>$arreglo[Genero]</td>";
                      echo "<td><button class='btn btn-danger btnDelete' id='$arreglo[Id_Cat]'><i class='fas fa-trash-alt'></i></button></td>";
                    echo "</tr>";
                }
               ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

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
    $('.btnDelete').click(function() {
      var id = $(this).attr('id')
      var dataD = 'id=' + id
      $.ajax({
        url: 'deleteCategory.php',
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>