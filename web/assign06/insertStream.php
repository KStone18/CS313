<?php
	include('database.php');
	$streamName = htmlspecialchars($_POST["streamName"]);
	
	$query = "INSERT INTO stream (name) VALUES (:name)";

	$statement = $db->prepare($query);
	$statement->bindValue(":name", $streamName, PDO::PARAM_STR);

	$statement->execute();

	header("Location: addInfo.php");
	die();
?>