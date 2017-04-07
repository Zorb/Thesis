<?php
session_start();
$con=mysql_connect("localhost","root","");
 mysql_select_db("regs",$con);

$sql="insert into bannedip(ip) values('".$_SERVER["REMOTE_ADDR"]."')";
$res=mysql_query($sql);

?>


