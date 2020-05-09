    <?php
  
    ?>
    <!-- BARRA LATERAL IZQUIERDA -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="productos.php" class="brand-link">
        <img src="../views/images/logo/logo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">FOOTWEAR LINE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../views/images/admin/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php print_r($_SESSION['user']);?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="productos.php" class="nav-link">
                <i class="nav-icon fab fa-product-hunt"></i>
                <p>
                  Productos
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="categoria.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Categorias
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../models/cerrarSesion.php" class="nav-link">
                <i class="nav-icon fas fa-sign-in-alt"></i>
                <p>
                  Cerrar Sesion
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>