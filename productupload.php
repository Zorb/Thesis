<?php
session_start();


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Upload</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">

					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index1.php"><img src="images/home/logo.jpg" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="Account.php" ><i class="fa fa-user active"></i> Account</a></li>
						    <!--<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>-->
								<!--<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>-->
                <li><a href="Cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <?php

                  if (isset($_SESSION['id'])){
                    echo "<li><a href='logout.php'><i class='fa fa-lock'></i> Logout</a></li>";
                  }else {
                    echo "<li><a href='Login.php'><i class='fa fa-lock'></i> Login</a></li>";
                  }
                ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index1.php" >Home</a></li>
                <li class="dropdown"><a class="active"href="pagerestrict.php">Provide</a></li>

								<!--<li><a href="contact-us.html">Contact</a></li>-->
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
              <script type="text/javascript">
              function submitform()
              {
                  document.forms["myform"].submit();
              }
              </script>
              <form id="myform" action="results.php">
                <input type="text" name = "Search" placeholder="Search" required=""/>
              </form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">









					</div>
				</div>

				<div class="col-sm-9 center">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                <div id="similar-product" class="carousel slide" data-ride="carousel" data-interval="false">

                <div class="carousel-inner">
                  <div class="item active">
  								  <img src="images/product-details/Default.png" alt="" />
                  </div>
                  <div class="item">
                    <img src="images/product-details/Default.png" alt="">
                  </div>
                  <div class="item">
                    <img src="images/product-details/Default.png" alt="" >
                  </div>

                  <div class="item">
                    <img src="images/product-details/Default.png" alt="" >
                  </div>

							</div>
              <a class="left item-control" href="#similar-product" data-slide="prev">
              <i class="fa fa-angle-left"></i>
              </a>
              <a class="right item-control" href="#similar-product" data-slide="next">
              <i class="fa fa-angle-right"></i>
              </a>
            	</div>
              	</div>


						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<!--<img src="images/product-details/new.jpg" class="newarrival" alt="" />-->
                <?php   $url = "http://" .$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                      $x=strpos($url, '?');
                  if($x>0){
                    $z= explode("/productupload.php?", $_SERVER['REQUEST_URI']);
                    $id=$z[1];
                    echo"<form method='POST' action='edit.php' enctype='multipart/form-data'>
                          <input type='hidden' name='pid' value=$id>";
                  }else{
                    echo"<form method='POST' action='upload.php' enctype='multipart/form-data'>";
                  }
                   ?>

                    <input type="text" name="pname" placeholder=" Product Name" required=""/>
                    <br>
                    <br>
                      <label>Product pictures:</label>
                      <input name="img[]" type="file" /><br />
                      <input name="img[]" type="file"/><br />
                      <input name="img[]" type="file"/><br />

                    <span>

    									<label>Price:</label>
    									<input type="text"  name="price" required=""/><label>€</label>
                      <br>
                      <br>


    								<p><b>Availability:</b> </p>
                      <select name="avail" >
                        <option value="In Stock" selected>In Stock</option>
                        <option value="Out of Stock">Out of Stock</option>
                      </select>
                      <br>
                      <br>
    								<p><b>Condition:</b> </p>
                    <select name="cond" >
                      <option value="New" selected>New</option>
                      <option value="Slightly Used">Slightly Used</option>
                      <option value="Heavily Used">Heavily Used</option>
                    </select>
                    	</span>
                      <br>
                      <br>
    								  <label >Brand:</label>
                    <input type="text" name="brand" placeholder=" Brand Name" required=""/>
                    <br>
                    <br><?php
                    if($x>0){
                      echo"<button type='submit' name='update' class='btn btn-fefault cart'>    Update  </button>";
                      echo"<button type='submit' name='delete' class='btn btn-fefault cart'>    Delete  </button>";

                    }else{
                    echo"<button type='submit' name='submit' class='btn btn-fefault cart'>    Submit  </button>";
                    }
                    ?>
              </form>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->



				</div>
			</div>
		</div>
	</section>
<footer id="footer">
  <div class="footer-widget">
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <div class="single-widget">
            <h2>Service</h2>
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">Online Help</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Order Status</a></li>
              <li><a href="#">Change Location</a></li>
              <li><a href="#">FAQ’s</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="single-widget">
            <h2>Quick Shop</h2>
            <ul class="nav nav-pills nav-stacked"color: #000000>
              <li><a href="#">Company Information</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Store Location</a></li>
              <li><a href="#">Affillate Program</a></li>
              <li><a href="#">Copyright</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="single-widget">
            <h2>Policies</h2>
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Refund Policy</a></li>
              <li><a href="#">Billing System</a></li>
              <li><a href="#">Ticket System</a></li>
            </ul>
          </div>
        </div>

        </div>


      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <p class="pull-left">Copyright © 2016 Zorb Inc. All rights reserved.</p>

      </div>
    </div>
  </div>

  </footer><!--/Footer-->



  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/main.js"></script>
  </body>
  </html>
