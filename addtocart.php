<?php
session_start();

if (isset($_POST['add'])){

  require 'dbh.php';

  $uid = $_SESSION['id'];
  $pid = $_POST['pid'];
  $sql = "UPDATE products SET now= '$uid' WHERE id=$pid";

  $result = mysqli_query($conn, $sql);



  header("Location: Cart.php");

}elseif (isset($_POST['remove'])){

  require 'dbh.php';


  $pid = $_POST['pid'];
  $sql = "UPDATE products SET now= 0 WHERE id=$pid";


  $result = mysqli_query($conn, $sql);




  header("Location: Index1.php?productremoved");

}







 ?>
