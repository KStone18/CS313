<?php
	var_dump($_POST);

	$_SESSION['name'] = $_POST['name'];
	$_SESSION['price'] = $_POST['price'];
	echo "it worked i made it" . $_SESSION["name"];
?>