<?php
session_start();

if (isset($_POST['submit'])){

  require 'dbh.php';

  $img1 = $_FILES['img']['name'][0];
  $img2 = $_FILES['img']['name'][1];
  $img3 = $_FILES['img']['name'][2];
  $name = $_POST['pname'];
  $price = $_POST['price'];
  $brand = $_POST['brand'];
  $avail = $_POST['avail'];
  $cond = $_POST['cond'];
  $uid = $_SESSION['id'];


  $sql = "INSERT INTO products(img1, img2, img3, name, price, avail, cond, brand, owner)
   VALUES('$img1','$img2','$img3','$name','$price','$avail','$cond','$brand','$uid') ";

  $result = mysqli_query($conn, $sql);


  for ($i=0; $i <3 ; $i++) {
          $target = "uploads/".basename($_FILES['img']['name'][$i]);
          move_uploaded_file($_FILES['img']['tmp_name'][$i], $target);
}





  header("Location: productinfo.php?$name");

}








 ?>
