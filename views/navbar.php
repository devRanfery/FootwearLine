  	<!-- MODELS PHP -->
  	<?php
		session_start();
			  
	    include_once('../models/modelCategoriaD.php');
	    include_once('../models/modelCategoriaH.php');
	  ?>
  	<!-- END MODELS PHP -->
  	<div class="container">
  	  <nav class="navbar navbar-light">
  	    <div class="col-md-6 logo-w3">
  	      <a href="index.php"><img src="images/logo2.png" alt=" " />
  	        <h1 style="height: 50px; line-height: 50px; font-size: 30px;">FOOTWEAR<span>LINE</span></h1>
  	      </a>
  	    </div>
  	    <div class="navbar-header nav_2">
  	      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
  	        data-target="#bs-megadropdown-tabs">
  	        <span class="sr-only">Toggle navigation</span>
  	        <span class="icon-bar"></span>
  	        <span class="icon-bar"></span>
  	        <span class="icon-bar"></span>
  	      </button>
  	    </div>
  	    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs" style="float: right;">
  	      <?php
  	      if(isset($_SESSION['user'])){ ?>
  	      <ul class="nav navbar-nav ">
  	        <li class="dropdown ">
  	          <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown">
  	            <span> <?php print_r( $_SESSION['user']); ?> <b class="caret"></b>
  	            </span>
  	          </a>
  	          <ul class="dropdown-menu multi2">
  	            <div class="row">
  	              <div class="col-md-12">
  	                <ul class="multi-column-dropdown">
  	                  <!-- MONSTRAMOS LAS CATEGORIAS DIRECTAMENTE DE LA BASE DE DATOS -->
  	                  <li>
  	                    <a href="../models/cerrarSesion.php">
  	                      Cerrar Sesion
  	                    </a>
  	                  </li>
  	                </ul>
  	              </div>
  	              <div class="clearfix"></div>
  	            </div>
  	          </ul>
  	        </li>
  	      </ul>
  	      <?php
  	      }else{
						echo "
						 <ul class='nav navbar-nav'>
  	        		<li><a href='login.php'>Iniciar Sesion</a></li>
  	      	 </ul>
						";
					}
					?>
  	    </div>
  	  </nav>
  	</div>

  	<div class="header-bottom-w3ls">
  	  <div class="container">
  	    <div class="col-md-7 navigation-agileits">
  	      <nav class="navbar navbar-default">
  	        <div class="navbar-header nav_2">
  	          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
  	            data-target="#bs-megadropdown-tabs">
  	            <span class="sr-only">Toggle navigation</span>
  	            <span class="icon-bar"></span>
  	            <span class="icon-bar"></span>
  	            <span class="icon-bar"></span>
  	          </button>
  	        </div>
  	        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
  	          <ul class="nav navbar-nav ">
  	            <li class=" active"><a href="index.php" class="hyper "><span>Inicio</span></a></li>

  	            <li class="dropdown ">
  	              <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown">
  	                <span> Dama <b class="caret"></b>
  	                </span>
  	              </a>
  	              <ul class="dropdown-menu multi">
  	                <div class="row">
  	                  <div class="col-sm-4">
  	                    <ul class="multi-column-dropdown">
  	                      <!-- MONSTRAMOS LAS CATEGORIAS DIRECTAMENTE DE LA BASE DE DATOS -->
  	                      <?php 
											    while($dama=mysqli_fetch_array($CatDama)){

                          echo "
                          <li>
                            <a href='product.php?Id=$dama[Id_Cat]' class='btn-category' id='$dama[Id_Cat]'>
                            <i class='fa fa-angle-right' aria-hidden='true'></i>
                            $dama[Descripcion]
                            </a>
                          </li>
                          ";
                          
													}
													
													//product.php?Id=$dama[Id_Cat]
										 	  ?>
  	                    </ul>
  	                  </div>
  	                  <!-- <div class="col-sm-4 w3l">
                      <a href="index.php"><img src="images/menu1.jpg" class="img-responsive" alt=""></a>
                    </div> -->
  	                  <div class="clearfix"></div>
  	                </div>
  	              </ul>
  	            </li>

  	            <li class="dropdown">
  	              <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown">
  	                <span> Caballero <b class="caret"></b>
  	                </span>
  	              </a>
  	              <ul class="dropdown-menu multi multi1">
  	                <div class="row">
  	                  <div class="col-sm-4">
  	                    <ul class="multi-column-dropdown">
  	                      <!-- MONSTRAMOS LAS CATEGORIAS DIRECTAMENTE DE LA BASE DE DATOS -->
  	                      <?php 
                        while($caballero=mysqli_fetch_array($CatHombre)){

                          echo "
                          <li>
                            <a href='product.php?Id=$caballero[Id_Cat]' class='btn-category' id='$caballero[Id_Cat]'>
                            <i class='fa fa-angle-right' aria-hidden='true'></i>
                            $caballero[Descripcion]
                            </a>
                          </li>
                          ";
                          }
										 	  ?>
  	                    </ul>
  	                  </div>
  	                  <!-- <div class="col-sm-4 w3l">
                      <a href="index.php"><img src="images/menu2.jpg" class="img-responsive" alt=""></a>
                    </div> -->
  	                  <div class="clearfix"></div>
  	                </div>
  	              </ul>
  	            </li>

  	            <li><a href="about.php" class="hyper"><span>Acerca de</span></a></li>
  	            <li><a href="contact.php" class="hyper"><span>Contáctenos</span></a></li>
  	          </ul>
  	        </div>
  	      </nav>
  	    </div>
  	    <script>
  	    $(document).ready(function() {
  	      $(".dropdown").hover(
  	        function() {
  	          $('.dropdown-menu', this).stop(true, true).slideDown("fast");
  	          $(this).toggleClass('open');
  	        },
  	        function() {
  	          $('.dropdown-menu', this).stop(true, true).slideUp("fast");
  	          $(this).toggleClass('open');
  	        }
  	      );
  	    });
  	    </script>
  	    <div class="col-md-4 search-agileinfo">
  	      <form action="#" method="post">
  	        <input type="search" name="Search" placeholder="Busca un producto..." required="">
  	        <button type="submit" class="btn btn-default search" aria-label="Left Align">
  	          <i class="fa fa-search" aria-hidden="true"> </i>
  	        </button>
  	      </form>
  	    </div>
  	    <div class="col-md-1 cart-wthree">
  	      <div class="cart">
  	        <form action="#" method="post" class="last">
  	          <input type="hidden" name="cmd" value="_cart" />
  	          <input type="hidden" name="display" value="1" />
  	          <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down"
  	              aria-hidden="true"></i></button>
  	        </form>
  	      </div>
  	    </div>
  	    <div class="clearfix"></div>
  	  </div>
  	</div>