<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | MAP</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
<script>
function toggle(source) {
  checkboxes = document.getElementsByName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
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
          <li class="current"><a href="map.php">map</a></li>
          <li><a href="Contact Us.php">Contact Us</a></li>
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
<figure>
<div id="map" style="width: 500px; height: 400px;"></div>
</figure>
</div>
<script type="text/javascript">
    var locations = [
      ['Kallisto Lounge Bar & Bistro', 37.51385264391143, 22.375348188885482, 4],
      ['The Mansion', 37.51092082980858, 22.373803236492904, 5],
      ['Nafplio Beach', 37.59083001126972, 22.769332506665023, 3],
      ['Bailar', 37.51009105019092, 22.378545382031234, 2],
      ['Hotel Arcadia', 37.50981871025447, 22.374575712689193, 1],
	  ['Tripoli City Hotel', 37.52772294580145, 22.372075893887313, 6],
	  ['Perivoli Hotel', 37.58127383181644, 22.880139925488265, 7],
	  ['Villa Incognito', 37.51232079604728, 22.37442550898436, 8],
	  ['Paparelas', 37.51247398224845, 22.373964169033798, 9],
	  ['Castle of Bourtzi', 37.5697605774239, 22.790704348095687, 10]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 9,
      center: new google.maps.LatLng(37.5111804, 22.3757988),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
		  infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script></div>
<div class="grid_3">
<form action="#" method="get">
<img src="images/pois.jpg">
<input type="checkbox" onClick="toggle(this)" /> Επιλογη/Ανεπιλογη ολων<br/>
  <input type="checkbox" name="foo" value="1"> Παραλιες<br>
  <input type="checkbox" name="foo" value="2"> Διαμονη<br>
  <input type="checkbox" name="foo" value="3"> Φαγητο<br>
  <input type="checkbox" name="foo" value="4"> Διασκεδαση<br>
  <input type="checkbox" name="foo" value="5" > Αξιοθεατα<br>
  <input type="submit" value="Submit">
</form>
        </div>
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