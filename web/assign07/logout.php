<?php

// must be used in order to use sessions array
session_start();

if(isset($_SESSION["user_Name"])) {

	
	unset($_SESSION["user_Name"]);

	session_destroy();

	header("Location: home.php");
}
?>