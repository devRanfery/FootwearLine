	<!DOCTYPE html>
	<html lang="es">

	<head>
	  <title>Productos</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	  <script type="application/x-javascript">
	  addEventListener("load", function() {
	    setTimeout(hideURLbar, 0);
	  }, false);

	  function hideURLbar() {
	    window.scrollTo(0, 1);
	  }
	  </script>
	  <!-- css -->
	  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
	  <!--// css -->
	  <!-- font -->
	  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	  <link
	    href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
	    rel='stylesheet' type='text/css'>
	  <!-- //font -->
	  <script src="js/jquery-1.11.1.min.js"></script>
	  <script src="js/bootstrap.js"></script>
	</head>

	<body>
	  <!-- NAVBAR -->
	  <?php
		include_once('navbar.php');
	?>
	  <!-- END NAVBAR -->

	  <!-- CONTAINER MAIN -->
	  <div class="content">
	    <div class="container">

	      <!-- NAVBAR LEFT -->
	      <div class="col-md-4 w3ls_dresses_grid_left">
	        <div class="w3ls_dresses_grid_left_grid">
	          <h3>Categories</h3>
	          <div class="w3ls_dresses_grid_left_grid_sub">
	            <div class="ecommerce_dres-type">
	              <ul>
	                <li><a href="watches.html">Leather strap</a></li>
	                <li><a href="watches.html">Steel strap</a></li>
	                <li><a href="watches.html">Chain type</a></li>
	                <li><a href="watches.html">Iron strap</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	        <div class="w3ls_dresses_grid_left_grid">
	          <h3>Color</h3>
	          <div class="w3ls_dresses_grid_left_grid_sub">
	            <div class="ecommerce_color">
	              <ul>
	                <li><a href="#"><i></i> Red(5)</a></li>
	                <li><a href="#"><i></i> Brown(2)</a></li>
	                <li><a href="#"><i></i> Yellow(3)</a></li>
	                <li><a href="#"><i></i> Violet(6)</a></li>
	                <li><a href="#"><i></i> Orange(2)</a></li>
	                <li><a href="#"><i></i> Blue(1)</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	        <div class="w3ls_dresses_grid_left_grid">
	          <h3>Size</h3>
	          <div class="w3ls_dresses_grid_left_grid_sub">
	            <div class="ecommerce_color ecommerce_size">
	              <ul>
	                <li><a href="#">Medium</a></li>
	                <li><a href="#">Large</a></li>
	                <li><a href="#">Extra Large</a></li>
	                <li><a href="#">Small</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	        <div class="w3ls_dresses_grid_left_grid">
	          <div class="dresses_img_hover">
	            <img src="images/offer5.jpg" alt=" " class="img-responsive" />
	            <div class="dresses_img_hover_pos">
	              <h4>Upto<span>30%</span><i>Off</i></h4>
	            </div>
	          </div>
	        </div>
	      </div>
	      <!-- END NAVBAR LEFT -->

	      <!-- CONTAINER PRODUCTS -->
	      <?php
					$Id = $_GET['Id'];
					
					if (isset($Id)) {
    			echo "<div class='IdCategoria' id='$Id' style='display:none'>$Id</div>";
					}else{
						echo "No hay productos disponibles";
					}
				?>
	      <div class="col-md-8 col-sm-8 women-dresses">
	        <div class="women-set1">

	        </div>
	      </div>


	      <!-- END CONTAINER PRODUCTS -->
	    </div>
	  </div>
	  <!-- END CONTAINER MAIN -->

	  <!-- NEWSLETTER -->
	  <div class="newsletter">
	    <div class="container">
	      <div class="col-md-6 w3agile_newsletter_left">
	        <h2>Newsletter</h2>
	        <p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
	      </div>
	      <div class="col-md-6 w3agile_newsletter_right">
	        <form action="#" method="post">
	          <input type="email" name="Email" value="Email" onfocus="this.value = '';"
	            onblur="if (this.value == '') {this.value = 'Email';}" required="">
	          <input type="submit" value="Subscribe" />
	        </form>
	      </div>
	      <div class="clearfix"> </div>
	    </div>
	  </div>
	  <!-- //NEWSLETTER -->

	  <!-- FOOTER -->
	  <?php
		include_once('footer.php');
	?>
	  <!-- END FOOTER -->

	  <!-- cart-js -->
	  <script src="js/minicart.js"></script>
	  <script>
	  w3ls1.render();

	  w3ls1.cart.on('w3sb1_checkout', function(evt) {
	    var items, len, i;

	    if (this.subtotal() > 0) {
	      items = this.items();

	      for (i = 0, len = items.length; i < len; i++) {
	        items[i].set('shipping', 0);
	        items[i].set('shipping2', 0);
	      }
	    }
	  });
	  </script>
	  <!-- //cart-js -->

	  <script src="js/functionProducts.js"></script>
	</body>

	</html>