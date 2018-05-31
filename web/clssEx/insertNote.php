<?php
	$courseId = htmlspecialchars($_POST["couse_id"]);
	$date = htmlspecialchars($_POST["date"]);
	$content = htmlspecialchars($_POST["content"]);

	echo "Course: $courseId\n";
	echo "Date: $date\n";
	echo "Content: $content\n";

	require("data.php");

	$db = get_db();

	$query = "INSERT INTO note (course_id, content, date) VALUE (:courseID, :content, :date)";
	$statement = $db->prepare($query);
	$statement.bindValue(":courseID", $courseID, PDO::PARAM_INT);
	$statement.bindValue(":content", $content, PDO::PARAM_STR);
	$statement.bindValue(":date", $date, PDO::PARAM_STR);

	$statement->execute();

	header("Location: courseDetails.php?course_id=$courseId");
	die();
	echo "It has worked";

?>