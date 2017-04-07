<?php
session_start();

function isloggedin(){
	
	
	if(isset($_SESSION['Username']) && !empty($_SESSION['Username'])){
		return true;
	}
	else{
		return false;
	}
}

?>