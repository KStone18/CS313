<?php
	var_dump($_POST);

	$_SESSION['cart'] = array($_POST['name'], $_POST['price'])
	

	echo "it worked i made it" . $_SESSION['cart'][0];
?>