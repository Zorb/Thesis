<?php
require 'check.php';
$con=mysql_connect("localhost","root","");
 mysql_select_db("regs",$con);
 echo $_POST["username"];


$sql="insert into usernames(username,password,name,lastname,email) values('".$_POST['username']."', '".$_POST['password']."', '".$_POST['name']."' , '".$_POST['lastname']."','".$_POST['email']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
$url='index.php';
echo '<html>';
echo '<script>window.location="'.$url.'";</script>';
echo '</html>';

}
Else
{
Echo "Username allready exists";
}




?>


