<!DOCTYPE html>
<html lang="en">
<head>
<title>Add new POI</title>
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

</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->

</head>
<body onload="initialize()">
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
	<div id="page-wrap">
	  	  <?php
      
 	require 'check.php';
if (isloggedin()) {
echo "      <div class=\"grid_12\">\n";
echo "  <div class=\"map\">\n";
echo "          <figure class=\"img_inner fright\">\n";
echo "<div id=\"googleMap\" style=\"width:500px;height:380px;\"></div>";
echo "          </figure>\n";
echo "  </div>";
echo "      <div class=\"grid_5\">\n";
echo "        <center><h3>Add new POI</h3></center>\n";
echo "        <form id=\"form\" action=\"addnpoi.php\" method=\"post\" enctype=\"multipart/form-data\">\n";
echo "          <div class=\"success_wrapper\">\n";
echo "            <div class=\"success\">A new POI has been submitted !<br></div>\n";
echo "          </div>\n";
echo "          <fieldset>\n";
echo "            <label class=\"POI name\">\n";
echo "              <input id=\"POI name\" name=\"poi_name\" type=\"text\" value=\"POI name\">\n";
echo "              <br class=\"clear\">\n";
echo "              <span class=\"error error-empty\">*This is not a valid Name.</span><span class=\"empty error-empty\">*This field is required.</span> </label>\n";
echo "            <label class=\"POI description\">\n";
echo "				<textarea name=\"poi_description\">POI description</textarea>";
echo "              <br class=\"clear\">\n";
echo "              <span class=\"error\">*The message is too short.</span><span class=\"empty error-empty\">*This field is required.</span> </label>&nbsp\n\n";
echo "          <label class=\"mb0\"> <span>Επιλεξτε Κατηγορια</span>\n";
echo "            <select name=\"formcategory\">\n";
echo "              <option value=\"1\">Παραλία</option>\n";
echo "              <option value=\"2\">Διαμονή</option>\n";
echo "              <option value=\"3\">Φαγητό</option>\n";
echo "              <option value=\"4\">Διασκέδαση</option>\n";
echo "              <option value=\"5\">Αξιοθέατα</option>\n";
echo "            </select>\n";
echo "          </label>\n";
echo "          <div class=\"clear\"></div>\n";
echo "          <label class=\"mb0\"> <span>Επιλεξτε Αρχειο</span>\n";
echo "            <select name=\"formfile\">\n";
echo "              <option value=\"1\">Φωτογραφία</option>\n";
echo "              <option value=\"2\">Βίντεο</option>\n";
echo "            </select>\n";
echo "          </label>\n";
echo "            <label class=\"POI name\">\n";
echo "              <input id=\"lat\" name=\"poi_lat\" type=\"text\" value=\"POI Lat\"></label>\n";
echo "              <br class=\"clear\">\n";
echo "            <label class=\"POI name\">\n";
echo "              <input id=\"lng\" name=\"poi_lng\" type=\"text\" value=\"POI Lng\"></label>\n";
echo "              <br class=\"clear\">\n";
echo "Upload a file: <br>\n";
echo "<input type=\"file\" name=\"upfile\" id=\"upfile\"> <br>\n";
echo "            <div class=\"clear\"></div>\n";
echo "              &nbsp<div class=\"none\"></div>\n";
echo "			  <input type=\"reset\" value=\"Καθαρισμος Πεδιων\">\n";
echo "			  <input type=\"submit\" value=\"Καταχώρηση\" onclick=\"submit();\">\n";
echo "              <div class=\"clear\"></div>\n";
echo "            </div>\n";
echo "          </fieldset>\n";
echo "        </form>\n";
echo "      </div>\n";
echo "      <div class=\"clear\"></div>";

}
?>
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