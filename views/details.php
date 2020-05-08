<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Footwear Line</title>
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
  <!--flex slider-->
  <script defer src="js/jquery.flexslider.js"></script>
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <script>
  // Can also be used with $(document).ready()
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      controlNav: "thumbnails"
    });
  });
  </script>
  <!--flex slider-->

  <script src="js/imagezoom.js"></script>
  <!-- //js -->

</head>

<body>
  <!-- NAVBAR -->
  <?php
include_once('navbar.php');
?>
  <!-- END NAVBAR -->

  <!-- SECCION DESCRIPCION DE PRODUCTOS -->
  <div class="products">
    <div class="container">



    </div>
  </div>
  <!-- //SECCION DESCRIPCION DE PRODUCTOS -->

  <!-- newsletter -->
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
  <!-- //newsletter -->

  <!-- FOOTER -->
  <?php
 include_once('footer.php')
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

  <!-- SCRIPT PARA MOSTRAR DETALLES DEL PRODUCTO -->
  <script src="js/detailsProduct.js"></script>
</body>

</html>