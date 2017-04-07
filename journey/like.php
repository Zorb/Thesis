
<?php
session_start();
$con = mysql_connect("localhost","root","");
mysql_select_db("regs",$con);

$sql=" SELECT ip FROM bannedip WHERE ( ip='".$_SERVER["REMOTE_ADDR"]."')";
$ress=mysql_query($sql);
$result=mysql_fetch_array($ress);
if($result['ip'] == $_SERVER["REMOTE_ADDR"]){
echo "You have already liked";
$url='Points of Interest.php';
echo '<html>';
echo '<script>window.location="'.$url.'";</script>';
echo '</html>';
}else{
$sql="UPDATE pois
SET poi_likes=poi_likes+1 
WHERE poi_id='".$_POST['likes']."'" ;
$res=mysql_query($sql);
$sql="insert into bannedip(ip) value('".$_SERVER["REMOTE_ADDR"]."')";
$resx=mysql_query($sql);
If($res)
{
$url='Points of Interest.php';
echo '<html>';
echo '<script>window.location="'.$url.'";</script>';
echo '</html>';

}
}
?>