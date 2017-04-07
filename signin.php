<?php
session_start();
require 'dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM members WHERE username='$uid' AND password='$pwd'";
$result = mysqli_query($conn, $sql);


if (!$row=mysqli_fetch_assoc($result)){
    echo "Your username or password is incorrect!";
}else {
    $_SESSION['id'] = $row['id'];
}

header("Location: index1.php");

 ?>
