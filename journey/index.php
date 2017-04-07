<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'random',
        pagination: false, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    });
    $("#tabs").tabs();
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="index.php">Home</a></li>
          <li class="with_ul"><a href="about.php">About</a>
            <ul>
              <li><a href="about.php">Team</a></li>
            </ul>
          </li>
          <li><a href="Top 5.php">Top 5</a></li>
          <li><a href="Points of Interest.php">Points of Interest</a></li>
          <li><a href="MAP.php">MAP</a></li>
          <li><a href="Contact Us.php">Contact Us</a></li>

 
  </ul> 
      </nav>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<div class="main">
  <div class="container_12">
    <div class="grid_12">
	<?php
	require 'check.php';
if (isloggedin()) {
    echo "<br><br>Welcome to the member's area, " . $_SESSION['Username'] . "!";
	echo "<br><input type=button onClick=\"parent.location='logout.php'\" value='Logout'>";
} else {
    echo "	<br><b> <a href=\"#tabs-1\">Login</a></b><br><br>\n";
echo "    <b><a href=\"Contact Us.php\" class=\"active\">Signup</a></b>";

}
	?>
	<!--<br><b> <a href="#tabs-1">Login</a></b><br><br>
    <b><a href="Contact Us.php" class="active">Signup</a></b>-->
      <div class="slider-relative">
        <div class="slider-block">
          <div class="slider"> <a href="#" class="prev"></a><a href="#" class="next"></a>
            <ul class="items">
              <li><img src="images/slide.jpg" alt="">
                <div class="banner">
                  <div>THERE ARE PLENTY OF PLACES</div>
                  <br>
                  <span> that are worth seeing</span> </div>
              </li>
              <li><img src="images/slide1.jpg" alt=""></li>
              <li><img src="images/slide2.jpg" alt=""></li>
              <li><img src="images/slide3.jpg" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h3>Our choice on Top 3 Destinations</h3>
      </div>
      <div class="boxes">
        <div class="grid_4">
          <figure>
            <div><img src="images/perivoli.jpg" height="337" width="360" alt=""></div>
            <figcaption>
              <h3>Perivoli</h3>
              Το ξενοδοχείο Περιβόλι βρίσκεται στα Πυργιώτικα, μόλις 8,5χλμ από την πόλη του Ναυπλίου. Κτισμένο μέσα σε ένα παλαιό πορτοκαλεώνα, είναι ιδανικό για χαλάρωση και ηρεμία. <a href="http://hotelperivoli.com/" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="grid_4">
          <figure>
            <div><img src="images/hotelarkadia.jpg" height="337" width="360" alt=""></div>
            <figcaption>
              <h3>Arcadia hotel</h3>
              Όταν η minimal πολυτέλεια συναντάει την Παράδοση! Το Hotel Arcadia είναι φτιαγμένο με τέτοιο τρόπο ώστε να προσφέρει χαλαρωτική διάθεση στους επισκέπτες του μέσα από το design του . <a href="http://www.hotelarcadia.gr/" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="grid_4">
          <figure>
            <div><img src="images/icognito.jpg" height="337" width="360" alt=""></div>
            <figcaption>
              <h3>Villa incognito</h3>
              Γευστικοτατο φαγητο, ομορφα διαμορφωμενος χωρος με υπεροχη μουσικη και φιλικη εξυπηρετηση. Πρωτοτυπες ιδεες/πινελιες διακοσμησης στα σερβιτσια, στα τραπεζια, ακομα και... στον χωρο της τουαλετας . <a href="https://www.facebook.com/pages/Villa-Incognito/347567435323138" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="clear"></div>
      </div>

	  <?php
      
 	
if (isloggedin()) {
} else {
echo "<div class=\"grid_4\">\n";
echo "	   <div class=\"newsletter_title\">Log In </div>\n";
echo "        <div class=\"n_container\">";

echo "<div id=\"tabs-1\">\n";
echo "  <form action=\"login.php\" method=\"post\">\n";
echo "  <br><br><br>\n";
echo "    <p><center><input id=\"User Name\" name=\"username\" type=\"text\" placeholder=\"User Name\"></center></p>\n";
echo "    <p><center><input id=\"password\" name=\"password\" type=\"password\" placeholder=\"Password\"></center></p>\n";
echo "    <input name=\"action\" type=\"hidden\" value=\"login\" /></p>\n";
echo "    <p><center><input type=\"submit\" value=\"Login\" /></center></p>\n";
echo "	<br><p><center><a href=\"Contact Us.php\">Click here to Register .</a></center></p>\n";
echo "  </form>\n";
echo "  </div>";
echo "  </div>";
echo "  </div>";
echo "  </div>";

}
	
  
  ?>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
	
  </div>
  <div class="bottom_block">
    <div class="container_12">
      <div class="grid_2 prefix_2">
        <ul>
          <li><a href="#">FAQS Page</a></li>
          <li><a href="#">People Say</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          <li><a href="#">Useful links</a></li>
          <li><a href="#">Partners</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          <li><a href="#">Insurance</a></li>
          <li><a href="#">Family Travel</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <h4>Contact Us:</h4>
        TEL: 2710 221308<br>
        <a href="#">jayzorbas@hotmail.com</a> </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <div class="copy"> Journey &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.Jason and Giannis/">Jason and Giannis</a> </div>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>