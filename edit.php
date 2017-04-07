<?php
session_start();

if (isset($_POST['update'])){

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
  $id = $_POST['pid'];
  $sql = "UPDATE products SET img1= '$img1', img2= '$img2', img3= '$img3', name= '$name', price= '$price', avail= '$avail', cond= '$cond', brand= '$brand' WHERE id=$id";

  $result = mysqli_query($conn, $sql);


  for ($i=0; $i <3 ; $i++) {
          $target = "uploads/".basename($_FILES['img']['name'][$i]);
          move_uploaded_file($_FILES['img']['tmp_name'][$i], $target);
}

  header("Location: productinfo.php?$name");

}elseif (isset($_POST['delete'])){

  require 'dbh.php';


  $id = $_POST['pid'];
  $sql = "DELETE FROM products  WHERE id=$id";

  $result = mysqli_query($conn, $sql);




  header("Location: Index1.php?productdeleted");

}







 ?>
