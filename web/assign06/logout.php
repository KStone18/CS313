<?php
if(isset($_SESSION["user_Name"])) {
	unset($_SESSION["user_Name"]);
	unset($_SESSION); 
	session_destroy();

	header("Location: home.php");
}
?>