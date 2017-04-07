
<?php
require 'check.php';
$con = mysql_connect("localhost","root","");
mysql_select_db("regs",$con);
$sql="SELECT count(*) FROM usernames WHERE(
username='".$_POST['username']."' and password='".$_POST['password']."')";
$query=mysql_query($sql);
$result=mysql_fetch_array($query);

if($result[0]==1){

$_SESSION['Username']=$_POST['username'];
echo $_SESSION['Username'];
$url='index.php';
echo '<html>';
echo '<script>window.location="'.$url.'";</script>';
echo '</html>';

}
else{
$url='index.php';
echo '<html>';
echo '<script>window.location="'.$url.'";</script>';
echo '</html>';
}

?>