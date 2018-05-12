<?php
	session_start();

	if(isset($_SESSION['cart'])) {
		$key = array_search($_POST['id'], $_SESSION['id']);
		if ($key !== false)
		{
			unset($_SESSION['cart'][$key]);
		}

		$_SESSION['cart'] = array_values($_SESSION['cart']);
	}
		
	$numItems = sizeof($_SESSION['cart']);
	echo $numItems; 
?>