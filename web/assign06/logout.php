if(isset($_SESSION["user_Name"])) {
				  unset($_SESSION["user_Name"]);
				  session_destroy();
}