<?php
session_start();
include('database.php');


$userName = htmlspecialchars($_POST["uName"]);
$password = htmlspecialchars($_POST["psw"]);
$rptPassword = htmlspecialchars($_POST["psw-repeat"]);


if ($password != $rptPassword) {
	$_SESSION["message"] = "Passwords do not Match";
	header("Location: home.php");
}

$isIN = false;

//echo $userName . " " . $password;
  foreach ($db->query('SELECT id, username, password FROM app_user') as $row) {
 	//echo $row["username"] . " " . $row["password"];   
    if ($userName == $row["username"] && $password == $row["password"])
    {

    	$_SESSION["messageL"] = "You have an account already. Please login";
        header("Location: login.php");
        $isIN = true;
        break;
    }
}

    if(!$isIn)
    {	
    	$query = "INSERT INTO app_user (username, password) VALUES (:username, :password)";

    	$statement = $db->prepare($query);
    	$statement->bindValue(":username", $userName, PDO::PARAM_STR);
    	$statement->bindValue(":password", $password, PDO::PARAM_STR);
    	$statement->execute();

        $_SESSION["user_Name"] = $userName;
        $_SESSION["id"] = $row["id"]; 


        echo $_SESSION["id"];
      //	header("Location: profile.php");
      	break;
    }
    
    die();


?>	