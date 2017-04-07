<?php
session_start();

$url = "http://" .$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if (strpos($url, 'error=username')!== false) {
  echo "Username already exists!";
}
 ?>


<html>
<head>
  <link rel="stylesheet" type="text/css" href="main.css">

  <title>Register</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
   <script src="http://malsup.github.com/jquery.form.js"></script>
   <script>
   function createCookie(name,value,days) {
    if (days) {
      var date = new Date();
      date.setTime(date.getTime()+(days*24*60*60*1000));
      var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
   }
   if (navigator.geolocation) {

     navigator.geolocation.getCurrentPosition(function(position) {
       createCookie('lat',position.coords.latitude,1);
       createCookie('lng',position.coords.longitude,1);


       });
     }
   </script>
  <div class="form">
  <form method="POST" action="signup.php" class="register-form">
    <input type="text" name="first" placeholder="first name" required=""/>
    <input type="text" name="last" placeholder="last name" required=""/>

    <input type="text" name="uid" placeholder="username" required=""/>
    <input type="password" name="pwd" placeholder="password" required=""/>
    <input type="text" name="city" placeholder="city" required=""/>
    <input type="text" name="addr" placeholder="address" required=""/>
    <input type="text" name="area_cd" placeholder="area code" required=""/>
    <input type="text" name="phone" placeholder="phone number" required=""/>
    <input type="email" name="email" placeholder="email address" required=""/>
    <!--input type="password" name="first" placeholder="confirm password" /-->

    <button type="submit">create</button>
    <br><br><a href="index1.php" class="button">cancel</a>
    <p class="message">Already registered? <a href="Login.php">Sign In</a></p>
  </form>

</div>
</head>
</html>
