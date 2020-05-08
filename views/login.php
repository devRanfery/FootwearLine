<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fashion Club an Ecommerce Online Shopping Category Flat Bootstrap responsive Website Template | Login ::
    w3layouts</title>
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
  <?php
include_once('navbar.php');
?>

  <div class="login">

    <div class="main-agileits">
      <div class="form-w3agile">
        <h3>Iniciar Sesion</h3>
        <form action="../models/modelLogin.php" method="post">
          <div class="key">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="text" name="email" required="" placeholder="Correo Electronico">
            <div class="clearfix"></div>
          </div>
          <div class="key">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password" required="" placeholder="Contraseña">
            <div class="clearfix"></div>
          </div>
          <input type="submit" value="Entrar">
        </form>
      </div>
      <div class="forg">
        <!-- <a href="#" class="forg-left">Forgot Password</a> -->
        <a href="register.html" class="forg-right">Registrarse</a>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
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
  <div class="footer">
    <div class="container">
      <div class="col-md-3 footer-grids fgd1">
        <a href="index.html"><img src="images/logo2.png" alt=" " />
          <h3>FASHION<span>CLUB</span></h3>
        </a>
        <ul>
          <li>1234k Avenue, 4th block,</li>
          <li>New York City.</li>
          <li><a href="mailto:info@example.com">info@example.com</a></li>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </ul>
      </div>
      <div class="col-md-3 footer-grids fgd2">
        <h4>Information</h4>
        <ul>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="icons.html">Web Icons</a></li>
          <li><a href="typography.html">Typography</a></li>
          <li><a href="faq.html">FAQ's</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-grids fgd3">
        <h4>Shop</h4>
        <ul>
          <li><a href="jewellery.html">Jewellery</a></li>
          <li><a href="cosmetics.html">Cosmetics</a></li>
          <li><a href="Shoes.html">Shoes</a></li>
          <li><a href="deos.html">Deos</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-grids fgd4">
        <h4>My Account</h4>
        <ul>

          <li><a href="login.html">Login</a></li>
          <li><a href="register.html">Register</a></li>
          <li><a href="recommended.html">Recommended </a></li>
          <li><a href="payment.html">Payments</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
      <p class="copy-right">© 2016 Fashion Club . All rights reserved | Design by <a href="http://w3layouts.com">
          W3layouts.</a></p>
    </div>
  </div>
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
</body>

</html>