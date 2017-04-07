<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | Points of Interest</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
$(function () {
    $(".form1").jqTransform();
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<?php require 'check.php'; ?>
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
          <li class="current"><a href="Points of Interest.php">Points Of Interest</a></li>
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
  <div class="content">
    <div class="container_12">
      <div class="grid_9">
        <h3>Points of Interest</h3>
		<?php
echo "        <div class=\"tours\">\n";		
$con = mysqli_connect("localhost", "root", "", "regs");
$sql = "SELECT poi_id,poi_name ,poi_category_id ,poi_text,poi_photo,poi_video,username,poi_lat,poi_lng,poi_likes FROM pois ORDER BY poi_likes DESC";
$result = $con->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
	$counter = 0;
    while($row = $result->fetch_assoc()) {
	$name=$row['poi_name'];
	$catid=$row['poi_category_id'];
	if($catid==1){
	  $catid="Παραλια";
	}else if($catid==2){
	  $catid="Διαμονη";
	}else if($catid==3){
	  $catid="Φαγητο";
	}else if($catid==4){
	  $catid="Διασκεδαση";
	}else if($catid==5){
	  $catid="Αξιοθεατα";
	}
	$text=$row['poi_text'];
	$srcc=$row['poi_photo'];
	$srnoc="noimage.png";
	$srcv=$row['poi_video'];
	$user=$row['username'];
	$like=$row['poi_likes'];
	$poid=$row['poi_id'];
	if($counter % 2==0){

echo "          <div class=\"grid_4 alpha\">\n";
echo "                <b><p class=\"text1\">$name</p></b>\n";
	if($srcv!=NULL){
echo "            <div class=\"tour\"> <img src=\"uploads/$srnoc\" alt=\"\" class=\"img_inner fleft\" height=\"143\" width=\"167\"\">\n";
echo "              <div class=\"extra_wrapper\">\n";
echo "                <p class=\"text1\">$catid</p>\n";
echo "                <p class=\"text1\">$text</p>\n";
echo "                <p class=\"price\">Likes  <span>$like</span></p>\n";
echo "<form id=\"".$poid."\" name=\"".$poid."\" method=\"post\" action=\"like.php\">";
echo "<input type=\"image\" src=\"images/like.png\" height=\"30\" width=\"30\" />";
echo "<input type=\"hidden\" name=\"likes\" value=\"".$poid."\" />";
echo "</form>";	
echo "                <p class=\"text1\">$user</p>\n";
echo "<form id=\"".$srcv."\" name=\"".$srcv."\" method=\"post\" action=\"video.php\">";
echo "<input type=\"image\" src=\"images/clickme.jpg\" height=\"30\" width=\"200\" />";
echo "<input type=\"hidden\" name=\"vid\" value=\"".$srcv."\" />";
echo "</form>";
echo "<form id=\"".$poid."\" name=\"".$poid."\" method=\"post\" action=\"maps.php\">";
echo "<input type=\"image\" src=\"images/map.png\" height=\"30\" width=\"200\" />";
echo "<input type=\"hidden\" name=\"id\" value=\"".$poid."\" />";
echo "</form>";
echo "            </div>\n";
echo "            </div>\n";
echo "          </div>\n";

	}else{
echo "            <div class=\"tour\"> <img src=\"uploads/$srcc\" alt=\"\" class=\"img_inner fleft\" height=\"143\" width=\"167\">\n";
echo "              <div class=\"extra_wrapper\">\n";
echo "                <p class=\"text1\">$catid</p>\n";
echo "                <p class=\"text1\">$text</p>\n";
echo "                <p class=\"price\">Likes  <span>$like</span></p>\n";
echo "<form id=\"".$poid."\" name=\"".$poid."\" method=\"post\" action=\"like.php\">";
echo "<input type=\"image\" src=\"images/like.png\" height=\"30\" width=\"30\" />";
echo "<input type=\"hidden\" name=\"likes\" value=\"".$poid."\" />";
echo "</form>";	
echo "                <p class=\"text1\">$user</p>\n";
echo "<form id=\"".$poid."\" name=\"".$poid."\" method=\"post\" action=\"maps.php\">";
echo "<input type=\"image\" src=\"images/map.png\" height=\"30\" width=\"200\" />";
echo "<input type=\"hidden\" name=\"id\" value=\"".$poid."\" />";
echo "</form>";
echo "            </div>\n";
echo "            </div>\n";
echo "          </div>\n";
}

}else{
echo "          <div class=\"grid_4 omega\">\n";
echo "                <b><p class=\"text1\">$name</p></b>\n";
	if($srcv!=NULL){
echo "            <div class=\"tour\"> <img src=\"uploads/$srnoc\" alt=\"\" class=\"img_inner fleft\" height=\"143\" width=\"167\">\n";
echo "              <div class=\"extra_wrapper\">\n";
echo "                <p class=\"text1\">$catid</p>\n";
echo "                <p class=\"text1\">$text</p>\n";
echo "                <p class=\"price\">Likes  <span>$like</span></p>\n";
echo "<form id=\"".$poid."\" name=\"".$poid."\" method=\"post\" action=\"like.php\">";
echo "<input type=\"image\" src=\"images/like.png\" height=\"30\" width=\"30\" />";
echo "<input type=\"hidden\" name=\"likes\" value=\"".$poid."\" />";
echo "</form>";	
echo "                <p class=\"text1\">$user</p>\n";
echo "<form id=\"".$srcv."\" name=\"".$srcv."\" method=\"post\" action=\"video.php\">";
echo "<input type=\"image\" src=\"images/clickme.jpg\" height=\"30\" width=\"200\" />";
echo "<input type=\"hidden\" name=\"vid\" value=\"".$srcv."\" />";
echo "</form>";
echo "<form id=\"".$poid."\" name=\"".$poid."\" method=\"post\" action=\"maps.php\">";
echo "<input type=\"image\" src=\"images/map.png\" height=\"30\" width=\"200\" />";
echo "<input type=\"hidden\" name=\"id\" value=\"".$poid."\" />";
echo "</form>";
echo "            </div>\n";
echo "            </div>\n";
echo "          </div>\n";

	}else{
echo "            <div class=\"tour\"> <img src=\"uploads/$srcc\" alt=\"\" class=\"img_inner fleft\" height=\"143\" width=\"167\">\n";
echo "              <div class=\"extra_wrapper\">\n";
echo "                <p class=\"text1\">$catid</p>\n";
echo "                <p class=\"text1\">$text</p>\n";
echo "                <p class=\"price\">Likes  <span>$like</span></p>\n";
echo "<form id=\"".$poid."\" name=\"".$poid."\" method=\"post\" action=\"like.php\">";
echo "<input type=\"image\" src=\"images/like.png\" height=\"30\" width=\"30\" />";
echo "<input type=\"hidden\" name=\"likes\" value=\"".$poid."\" />";
echo "</form>";	
echo "                <p class=\"text1\">$user</p>\n";
echo "<form id=\"".$poid."\" name=\"".$poid."\" method=\"post\" action=\"maps.php\">";
echo "<input type=\"image\" src=\"images/map.png\" height=\"30\" width=\"200\" />";
echo "<input type=\"hidden\" name=\"id\" value=\"".$poid."\" />";
echo "</form>";
echo "            </div>\n";
echo "            </div>\n";
echo "          </div>\n";
}

echo " <div class=\"clear\"></div> \n";
}
$counter++;
}
}

echo "          </div>\n";
		?>
      </div>
      <div class="grid_3">
	  <h3>Add a new POI</h3>
	  
<?php
if (isloggedin()) {
echo "<a href=\"add.php\">Click here to add a new POI</a><br><br><br><br>";
} else {
echo "<a href=\"index.php\">Click here to add a new POI</a><br><br><br><br>";
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