<?php
  session_start();

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="main.css">
  <title>Register</title>
  <div class="form">
  <form class="register-form">
    <input type="text" placeholder="first name" class="validate" required/>
    <input type="text" placeholder="last name" class="validate" required/>
    <input type="text" placeholder="city" class="validate" required/>
    <input type="text" placeholder="address" class="validate" required/>
    <input type="text" placeholder="area code" class="validate" required/>
    <input type="text" placeholder="phone number" class="validate" required/>
    <input type="email" placeholder="email address" class="validate" required/>
    <input type="text" placeholder="username" class="validate" required/>
    <input type="password" placeholder="password" class="validate" required/>
    <input type="password" placeholder="confirm password" class="validate" required/>

    <button>create</button>
    <br><br><a href="index.html" class="button">cancel</a>
    <p class="message">Already registered? <a href="Login.html">Sign In</a></p>
  </form>
</div>
</head>
</html>
