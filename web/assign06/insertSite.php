<?php
	include('database.php');
	
	$stream_id = htmlspecialchars($_POST["stream"])
	$siteName = htmlspecialchars($_POST["siteName"]);
    $latitude = htmlspecialchars($_POST["Latitude"]);
    $longitude = htmlspecialchars($_POST["Longitude"]);
	$description = htmlspecialchars($_POST["descriptOfSite"]);
	$journalName = htmlspecialchars($_POST["journalName"]);
	$date = htmlspecialchars($_POST["date"]);
	$content = htmlspecialchars($_POST["contentOfJouranl"]);
	$gender = htmlspecialchars($_POST["gender"]);
	$pregnant = htmlspecialchars($_POST["pregnant"]);
	$species = htmlspecialchars($_POST["species"]);


	//$stream_id = $PDO->lastInsertId('stream_id_seq');

	var_dump($_POST);
	echo "$stream_id";

	
	// $query = "INSERT INTO site (name, description, latitude, longitude, stream_id) VALUES (:name, :description, :latitude, :longitude, :stream_id)";

	// $statement = $db->prepare($query);
	// $statement->bindValue(":name", $streamName, PDO::PARAM_STR);
	// $statement->bindValue(":description"), $description, PDO::PARAM_STR);
	// $statement->bindValue(":latitude"), $latitude, PDO::PARAM_STR);
	// $statement->bindValue(":longitude"), $longitude, PDO::PARAM_STR);
	// $statement->bindValue(":stream_id"), $stream_id, PDO::PARAM_INT);


	// $statement->execute();

	//header("Location: addInfo.php");
	//die();
	?>