<?php
session_start();
include('database.php');

// Grab and sanitize input from form
$userName = htmlspecialchars($_POST["uName"]);
$password = htmlspecialchars($_POST["psw"]);
$rptPassword = htmlspecialchars($_POST["psw-repeat"]);

// Hash password with password_default current best algorithm
$hashPassword = password_hash($password, PASSWORD_DEFAULT);

// Check if passwords match 
if ($password != $rptPassword) {
	$_SESSION["message"] = "Passwords do not Match";
	header("Location: home.php");
}

$isIN = false;

  // loop through the database adn compare usernames and passwords. 
  foreach ($db->query('SELECT id, username, password FROM app_user') as $row) {
    if ($userName == $row["username"] && password_verify($password, $row['password']))
    {
        // Put a message into the sessions to be displayed on home.php
    	$_SESSION["messageL"] = "You have an account already. Please login";
        header("Location: login.php");      // Redirect in to login
        $isIN = true;
        break;
    }
}

    if(!$isIn)
    {	
        // Insert into table app_user
    	$query = "INSERT INTO app_user (username, password) VALUES (:username, :password)";

        // prepare the query 
        // Bind value to stop sql injection attacks
    	$statement = $db->prepare($query);
    	$statement->bindValue(":username", $userName, PDO::PARAM_STR);
    	$statement->bindValue(":password", $hashPassword, PDO::PARAM_STR);
    	$statement->execute();

        // set session variables 
        $_SESSION["user_Name"] = $userName;
        $_SESSION["id"] = $db->lastInsertId('app_user_id_seq');

        // redirect to profile
    	header("Location: profile.php");
      	break;
    }
    
    // kill the connection to the database for this page. 
    die();


?>	