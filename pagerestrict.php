<?php
session_start();


if(isset($_SESSION['id'])){
  header("Location: productupload.php");
}else{
echo "You are not logged in!";
header("Location: Login.php");

}


 ?>
