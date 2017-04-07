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
<script
src="http://maps.googleapis.com/maps/api/js?sensor=false">
</script>

<script>

var myCenter=new google.maps.LatLng(37.5111804, 22.3757988);

function initialize()
{
 
var mapProp = {
  center:myCenter,
  zoom:14,
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
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a>
            <ul>
              <li><a href="about.php">Team</a></li>
            </ul>
          </li>
          <li><a href="Top 5.php">Top 5</a></li>
          <li><a href="Points of Interest.php">Points of Interest</a></li>
          <li><a href="MAP.php">MAP</a></li>
          <li class="current"><a href="Contact Us.php">Contact Us</a></li>
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
        <h3>Location</h3>
<div class="map">
<figure class="img_inner fleft">
<div id="googleMap" style="width:500px;height:380px;"></div>
         </figure>
          <address>
          <dl>
            <dt> Παυσανιου 11,<br> </dt>
            <dd><span>Ονοματεπωνυμο: </span> Ιασων Ζορμπας</dd>
			<dd><span>ΑΜ:</span>2025201200033</dd>
			<dd><span>Τηλεφωνο:</span>2710 221308</dd>
            <dd><span>FAX:</span>2710 221308</dd>
            <dd>E-mail: <a href="#" class="link-1">jayzorbas@hotmail.com</a></dd>
          </dl>
          </address>
          <address class="mb0">
          <dl>
            <dt> Καλαβρητων 29,<br> </dt>
            <dd><span>Ονοματεπωνυμο: </span> Γιαννης Βαρδας</dd>
			<dd><span>ΑΜ:</span>2025201200011</dd>
			<dd><span>Τηλεφωνο:</span>2711 101491</dd>
            <dd><span>FAX:</span>2711 101491</dd>
            <dd>E-mail: <a href="#" class="link-1">cst12011@uop.gr</a></dd>
          </dl>
          </address>
        </div>
      </div>
	  	  <?php
      
 	require 'check.php';
if (isloggedin()) {
} else {
echo "      <div class=\"grid_3\">\n";
echo "        <h3>Register</h3>\n";
echo "        <form id=\"form\" action=\"register.php\" method=\"post\">\n";
echo "          <div class=\"success_wrapper\">\n";
echo "            <div class=\"success\">Your registration has been submitted !<br></div>\n";
echo "          </div>\n";
echo "          <fieldset>\n";
echo "            <label class=\"User Name\">\n";
echo "              <input id=\"User Name\" name=\"username\" type=\"text\" placeholder=\"User Name\">\n";
echo "              <br class=\"clear\">\n";
echo "              <span class=\"error error-empty\">*This is not a valid User Name.</span><span class=\"empty error-empty\">*This field is required.</span> </label>\n";
echo "            <label class=\"Password\">\n";
echo "              <input id=\"Κωδικος\" name=\"password\" type=\"password\" placeholder=\"Κωδικος\">\n";
echo "              <br class=\"clear\">\n";
echo "              <span class=\"error error-empty\">*This is not a valid password .</span><span class=\"empty error-empty\">*This field is required.</span> </label>\n";
echo "            <label class=\"Password match\">\n";
echo "              <input id=\"Επιβεβαιωση Κωδικου\" name=\"repassword\" type=\"password\" placeholder=\"Επιβεβαιωση Κωδικου\">\n";
echo "              <br class=\"clear\">\n";
echo "              <span class=\"error error-empty\">*The passwords do not match.</span><span class=\"empty error-empty\">*This field is required.</span> </label>\n";
echo "			  <label class=\"Name\">\n";
echo "              <input id=\"Ονομα\" name=\"name\" type=\"text\" placeholder=\"Ονομα\">\n";
echo "              <br class=\"clear\">\n";
echo "              <span class=\"error error-empty\">*This is not a valid name.</span><span class=\"empty error-empty\">*This field is required.</span> </label>\n";
echo "			  <label class=\"Surname\">\n";
echo "              <input id=\"Επιθετο\" name=\"lastname\" type=\"text\" placeholder=\"Επιθετο\">\n";
echo "              <br class=\"clear\">\n";
echo "              <span class=\"error error-empty\">*This is not a valid surname.</span><span class=\"empty error-empty\">*This field is required.</span> </label>\n";
echo "			  <label class=\"E-mail\">\n";
echo "              <input id=\"e-mail\" name=\"email\" type=\"text\" placeholder=\"E-mail\">\n";
echo "              <br class=\"clear\">\n";
echo "              <span class=\"error error-empty\">*This is not a valid email address.</span><span class=\"empty error-empty\">*This field is required.</span> </label>\n";
echo "            <div class=\"clear\"></div>\n";
echo "            <!--<div class=\"btns\"><a data-type=\"reset\" class=\"btn\">Clear</a>-->\n";
echo "              <div class=\"none\"></div>\n";
echo "			  <input type=\"reset\" value=\"Clear Fields\">\n";
echo "			  <input type=\"submit\" value=\"Sign Up\" onclick=\"submit();\">\n";
echo "              <!--<a data-type=\"submit\" onclick=\"submit();\" class=\"btn\">Sign Up</a>-->\n";
echo "              <div class=\"clear\"></div>\n";
echo "            </div>\n";
echo "          </fieldset>\n";
echo "        </form>\n";
echo "      </div>\n";
echo "      <div class=\"clear\"></div>";

}
?>
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