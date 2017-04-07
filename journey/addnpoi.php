<?php
session_start();

$destination="C:\\xampp\\htdocs\\journey\\uploads\\";
 	if(!empty($_FILES)){
			$destination.=$_FILES["upfile"]["name"];
			$filename=$_FILES["upfile"]["tmp_name"];
			move_uploaded_file($filename,$destination);
		} 

$con=mysql_connect("localhost","root","");
 mysql_select_db("regs",$con);
if( $_POST["formfile"] == 1){
	$photo=$_FILES["upfile"]["name"];
	$sql="insert into pois(poi_name,poi_text,poi_category_id,poi_photo,poi_lat,poi_lng,username) values('".$_POST['poi_name']."', '".$_POST['poi_description']."' , '".$_POST['formcategory']."','".$photo."','".$_POST['poi_lat']."','".$_POST['poi_lng']."','".$_SESSION['Username']."')";
}else{
	$video=$_FILES["upfile"]["name"];
	$sql="insert into pois(poi_name,poi_text,poi_category_id,poi_video,poi_lat,poi_lng,username) values('".$_POST['poi_name']."', '".$_POST['poi_description']."' , '".$_POST['formcategory']."','".$video."','".$_POST['poi_lat']."','".$_POST['poi_lng']."','".$_SESSION['Username']."')";
}
$res=mysql_query($sql);

If($res)
{
$url='Points of Interest.php';
echo '<html>';
echo '<script>window.location="'.$url.'";</script>';
echo '</html>';

}
Else
{
Echo "There is some problem in inserting data";
}




?>