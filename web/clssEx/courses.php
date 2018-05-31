<?php 
require_once("data.php");

$db = get_db();


if (!isset($db)) {
	die("DB Connection was not set");
}

$query = "Select id, name, number FROM course";

$statement = $db->prepare($query);
// bind any variable needed none needed at the moment
$statement->execute();
$courses = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html> 
<html>
	<head> 
		<title></title>
	</head>
<body>
	<h1> Courses </h1>

	<ul>

		<?php
		foreach ($courses as $course) {
			$id = $course["id"];
			$name = $course["name"];
			$number = $course["number"];

			echo "<li><a href='courseDetails.php?course_id=$id'> $number - $name</a></li>";
		}
		
		?>
		
	</ul>
	

</body>
</html>