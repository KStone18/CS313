<?php
session_start();
include('database.php');

$userName = htmlspecialchars($_POST["uname"]);
$password = htmlspecialchars($_POST["psw"]);

echo $userName . " " . $password;
  foreach ($db->query('SELECT id, username, password FROM app_user') as $row) {
 	echo $row;
  	//echo "username: " . $row["username"] . "password: " . $row["password"];
    //if ($userName = $row["username"] && $password = $row["password"]);
 //       {
 //         $SESSION["user_Name"] = $userName;
 //         header("Location: profile.php");

 //       }
 //       else 
 //       {
 //       	echo "You have not signed up. Please signup before continuing!";
 //       	header("Location: home.php");
 //       }
  } 


?>