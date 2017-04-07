<?php
session_start();


 ?>




<html>
<head>

  <link rel="stylesheet" type="text/css" href="main.css">
  <div class="login-page">
    <div class="form">
    <form  method="POST" action="signin.php"class="login-form">
      <input type="text" name="uid" placeholder="username" required=""/>
      <input type="password" name="pwd" placeholder="password" required=""/>
      <button type="submit">login</button>
      <br><br><a href="index1.php" class="button">cancel</a>
    <br><p class="message">Not registered? <a href="Register.php">Create an account</a></p>
    </form>
    
  </div>
</div>
</head>
</html>
