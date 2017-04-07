<?php
session_start();
require 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$city = $_POST['city'];
$addr = $_POST['addr'];
$area_cd = $_POST['area_cd'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$lat = $_COOKIE['lat'];
$lng = $_COOKIE['lng'];

$sql = "SELECT username FROM members WHERE username = '$uid'";
$result = mysqli_query($conn, $sql);
$uidcheck = mysqli_num_rows($result);
if ($uidcheck > 0){
  header("Location: ../Register.php?error=username");
  exit();
}else {
  $sql = "INSERT INTO members(username, password, mail, fname, lname, city, address, area_cd, phone, lat, lng)
   VALUES('$uid','$pwd','$email','$first','$last','$city','$addr','$area_cd','$phone','$lat','$lng') ";

  $result = mysqli_query($conn, $sql);
  header("Location: index1.php");
}

 ?>
