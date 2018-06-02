<?php
session_start();
include('database.php');

$userName = htmlspecialchars($_POST["uname"]);
$password = htmlspecialchars($_POST["psw"]);
$rptPassword = htmlspecialchars($_POST["psw-repeat"]);

if ($password == $rptPassword) {
	$_SESSION["message"] = "Passwords do not Match";
	header("Location: home.php");
}

//echo $userName . " " . $password;
  foreach ($db->query('SELECT id, username, password FROM app_user') as $row) {
 	echo $row["username"] . " " . $row["password"];
  	//echo "username: " . $row["username"] . "password: " . $row["password"];
    if ($userName == $row["username"] and $password == $row["password"])
    {
    	$_SESSION["messageL"] = "You have an account already. Please login";
        header("Location: login.php");
        break;

    }
    else
    {
    	$_SESSION["user_Name"] = $userName;
      	header("Location: profile.php");
      	break;
    }

  } 


?>	