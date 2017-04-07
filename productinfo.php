<?php
session_start();
require 'dbh.php';
    $url = "http://" .$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $x= explode("/productinfo.php?", $_SERVER['REQUEST_URI']);
    $z=explode('%20', $x[1]);
    $name = implode(" ",$z);
    $sql = "SELECT * FROM products WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
        $img1= $row['img1'];
        $img2= $row['img2'];
        $img3= $row['img3'];
        $pname = $row['name'];
        $price = $row['price'];
        $brand =$row['brand'];
        $avail = $row['avail'];
        $cond = $row['cond'];
        $uid = $row['owner'];
        $pid = $row['id'];
        $sql = "SELECT * FROM members WHERE id = $uid";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $oname= $row['username'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo "<title>$pname</title>"; ?>
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
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
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
                <li class="dropdown"><a href="pagerestrict.php">Provide</a></li>


                                    </ul>

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
            <?php

             ?>
				<div class="col-sm-9 center">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                <div id="similar-product" class="carousel slide" data-ride="carousel" data-interval="false">

                <div class="carousel-inner">
                  <div class="item active">
                    <?php
  								  echo"<img src='uploads/$img1'/>";
                    ?>
                  </div>
                  <div class="item">
                    <?php
                    echo"<img src='uploads/$img2'/>";
                    ?>
                  </div>
                  <div class="item">
                    <?php
                    echo"<img src='uploads/$img3'/> ";
                    ?>
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
                <form method='POST' action='addtocart.php' >
                  <?php
                              echo "<h1>$pname</h1>";


            								  echo "<p>Owner: $oname </p>
            								<span>

            									<span>Price: $price € /day</span>";

                              if ($_SESSION['id']==$uid){
                                echo "<button type='button' class='btn btn-fefault cart'><a href='productupload.php?$pid' >Edit Your Product</a></button>";
                              }else {
                                echo "<button type='submit' name='add' class='btn btn-fefault cart'><i class='fa fa-shopping-cart'></i>	Add to cart	</button>
                                <input type='hidden' name='pid' value=$pid>";
                              }

            										echo "
            								</span>
            								<p><b>Availability:</b> $avail</p>
            								<p><b>Condition:</b> $cond</p>
            								<p><b>Brand:</b> $brand</p>
            							</div><!--/product-information-->
            						</div>
          					</div><!--/product-details-->";
                ?>
              </form>
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#other_products" data-toggle="tab">Users Other Products</a></li>
								<li><a href="#companyprofile" data-toggle="tab">User Location</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Submit a Review</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade pull-right" id="other_products" >
								<?php
                $sql = "SELECT * FROM products WHERE owner = '$uid'";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                  $img1=$row['img1'];
                  $price=$row['price'];
                  $pname=$row['name'];
                      echo"<div class='col-sm-2'>";
      							echo"		<div class='product-image-wrapper'>";
      									echo"	<div class='single-products'>";
      											echo"<div class='productinfo text-center'>";
      												 echo "<img src='uploads/$img1'  />
                  												<h2>$price €</h2>
                  												<p>$pname</p>";

      									echo"<button type='button' class='btn btn-default add-to-cart'><a  href='productinfo.php?$pname' >View Product</a></button>";

      										echo"	</div>";
      										echo"</div>";
      									echo"</div>";
      								echo"</div>";
              }
                ?>
							</div>

							<div class="tab-pane fade" id="companyprofile" >
                <?php

                        $sql = "SELECT * FROM members WHERE id ='$uid'";//$uid
                        $result = mysqli_query($conn, $sql);
                      if(  $row = mysqli_fetch_assoc($result)){
                        $lat=$row['lat'];
                        $lng=$row['lng'];
                }
                 ?>

                <div id="map" style="width:814px;height:404px;"></div>




                <script>
                var  sellersLatLng = {lat:<?php echo $lat?>,  lng: <?php echo $lng?>};


                  function initMap() {

                    var map = new google.maps.Map(document.getElementById('map'), {
                      center: {lat: -34.397, lng: 150.644},
                      zoom: 12
                    });

                    if (navigator.geolocation) {
                      navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                          lat: position.coords.latitude,
                          lng: position.coords.longitude
                        };

                        map.setCenter(pos);
                        var infowindow = new google.maps.InfoWindow({
                            content: "You are here!"
                          });
                          var infowindow2 = new google.maps.InfoWindow({
                              content: "The seller is here!"
                            });
                        var marker = new google.maps.Marker({
                          position: pos,
                          map: map,
                        animation: google.maps.Animation.BOUNCE
                        });


                        marker.addListener('click', function() {
                        infowindow.open(map, marker);
                        });


                        var marker2 = new google.maps.Marker({
                          position: sellersLatLng,
                          map: map

                    });
                    marker2.addListener('click', function() {
                    infowindow2.open(map, marker2);
                    });

                      });
                    }

                  }


                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5uhN8381E6BdxjYSYxXce2vSvKmS9xG4&callback=initMap">

                </script>
                                    </div>


							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
                    <?php echo "<li><i class='fa fa-user'></i>  $oname&nbsp&nbsp</li>";

										echo"<li><i class='fa fa-clock-o'></i>"  .   date("F j, Y, g:i a")."</li>";
                    ?>
									</ul>
									<p><b>Write Your Review</b></p>

									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>

						</div>
					</div><!--/category-tab-->


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
