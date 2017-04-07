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

<script
src="http://maps.googleapis.com/maps/api/js?sensor=false">
</script>
<?php
session_start();
$con = mysql_connect("localhost","root","");
mysql_select_db("regs",$con);
$sql="SELECT poi_lng,poi_lat FROM pois WHERE(
poi_id='".$_POST['id']."')";
$query=mysql_query($sql);
$result=mysql_fetch_array($query);
$llng=$result['poi_lng'];
$llat=$result['poi_lat'];
?>
<script>

var myCenter=new google.maps.LatLng(<?php echo $llat?>, <?php echo $llng?>);

function initialize()
{
 
var mapProp = {
  center:myCenter,
  zoom:17,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
   map:map,
  draggable:true,
  position:myCenter
 
  });

marker.setMap(map);
google.maps.event.addListener(marker, 'dragend', function (event) {
    document.getElementById("lat").value = marker.getPosition().lat();
    document.getElementById("lng").value=marker.getPosition().lng();
});
}


google.maps.event.addDomListener(window, 'load', initialize);


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
<div class="map">
<figure class="img_inner fright">
<div id="googleMap" style="width:500px;height:380px;"></div>
         </figure>
</div>
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
