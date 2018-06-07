<?php
session_start();
include('database.php');

$userName = htmlspecialchars($_POST["uname"]);
$password = htmlspecialchars($_POST["psw"]);

//echo $userName . " " . $password;
  foreach ($db->query('SELECT id, username, password FROM app_user') as $row) {
 	//echo $row["username"] . " " . $row["password"];
  	//echo "username: " . $row["username"] . "password: " . $row["password"];
    if ($userName == $row["username"] && password_verify($password, $row['password']))
    {
    	  $SESSION["user_Name"] = $userName;
        $_SESSION["id"] = $row["id"];
        header("Location: profile.php");
        break;

    }
    else
    {
    	$_SESSION["message"] = "You are not signed up. Please create an account!";
      	header("Location: home.php");
    }

  } 


?>