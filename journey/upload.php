<?php

if ($_FILES["upfile"]["error"] = = 0)
{
echo "Upload:".$_FILES["upfile"]["name"]."<br>";
echo "Type:".$_FILES["upfile"]["type"]."<br>";
echo "Size:".($_FILES["upfile"]["size"]/1024)."kB<br>";
echo "Temporary stored in:".$_FILES["upfile"]["tmp_name"];
}
else
echo "Error:".$_FILES["upfile"]["error"]."<br>";

$destination = "C:\xampp\htdocs\journey\tmp"; 
if(!empty($_FILES)) 
{ 
$destination .= $_FILES["upfile"]["name"]; 
$filename = $_FILES["upfile"]["tmp_name"]; 
move_uploaded_file($filename, $destination); 
}
?>