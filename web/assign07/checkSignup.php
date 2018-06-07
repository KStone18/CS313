<?php
session_start();
include('database.php');


$userName = htmlspecialchars($_POST["uName"]);
$password = htmlspecialchars($_POST["psw"]);
$rptPassword = htmlspecialchars($_POST["psw-repeat"]);

$hashPassword = password_hash($password, PASSWORD_DEFAULT);

//echo $hashPassword;

if ($password != $rptPassword) {
	$_SESSION["message"] = "Passwords do not Match";
	header("Location: home.php");
}

$isIN = false;

  foreach ($db->query('SELECT id, username, password FROM app_user') as $row) {
    if ($userName == $row["username"] && password_verify($password, $row['password']))
    {

    	$_SESSION["messageL"] = "You have an account already. Please login";
        //echo "already found";
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
    	$statement->bindValue(":password", $hashPassword, PDO::PARAM_STR);
    	$statement->execute();

        $_SESSION["user_Name"] = $userName;

        $_SESSION["id"] = $db->lastInsertId('app_user_id_seq');


       // echo $_SESSION["id"];
    	header("Location: profile.php");
      	break;
    }
    
    die();


?>	