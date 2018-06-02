<?php
	include('database.php');
	//var_dump($_POST);
	
	$stream_id = htmlspecialchars($_POST["stream"]);
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

	
	$query = "INSERT INTO site (name, description, latitude, longitude, stream_id) VALUES (:name, :description, :latitude, :longitude, :stream_id)";

	$statement = $db->prepare($query);
	$statement->bindValue(":name", $siteName, PDO::PARAM_STR);
	$statement->bindValue(":description", $description, PDO::PARAM_STR);
	$statement->bindValue(":latitude", $latitude, PDO::PARAM_STR);
	$statement->bindValue(":longitude", $longitude, PDO::PARAM_STR);
	$statement->bindValue(":stream_id", $stream_id, PDO::PARAM_INT);
	$statement->execute();

	echo "We are here";
	$site_id = $db->lastInsertId('site_id_seq');

	//echo $site_id;

	//  $query2 = "INSERT INTO journal (name, date, content, site_id, author_id) VALUES (:name, :date, :content, :site_id, :author_id)";

	// $statement2 = $db->prepare($query2);
	// $statement2->bindValue(":name", $journalName, PDO::PARAM_STR);
	// $statement2->bindValue(":date", $date, PDO::PARAM_STR);
	// $statement2->bindValue(":content", $content, PDO::PARAM_STR);
	// $statement2->bindValue(":site_id", $site_id, PDO::PARAM_INT);
	// //$statement2->bindValue(":author_id", )
	// $statement2->execute();

	// $query3 = ""


	 //header("Location: addSite.php");
	 //die();
	?>