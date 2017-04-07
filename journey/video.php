<!DOCTYPE html>
<html lang="en">

<head>
<title>Journey | Contact Us</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script>
<script src="js/forms.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
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

<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
      <div class="clear"></div>
    </div>
	<div class="menu_block">
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="Points of Interest.php">Back</a></li>
		</ul>
	  </nav>	
	  <div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
</header>

<div class="main">
	<div class="content">
		<div class="container_12">
			<div class="grid_9">
			<?php
			session_start();
			$video=$_POST['vid'];
echo "			<video width=\"640\" height=\"420\" controls=\"controls\" autoplay=\"autoplay\">\n";
echo "			<source src=\"uploads/$video.mp4\" > \n";
echo "			<object data=\"\" width=\"320\" height=\"240\"> \n";
echo "			<embed width=\"320\" height=\"240\" src=\"$video.mp4\"> \n";
echo "			</object>";

?>
			</div>
			<div class="grid_3">
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
