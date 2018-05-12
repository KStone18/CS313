<?php
	session_start();

	if(empty($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}
	 
	array_push($_SESSION['cart'], $_POST['id']);

	 
	$idAssoc = ["1" => "R/C Truck, $200.00", "2" => "White R/C Truck $200.00", "3" => "R/C Boat, $150.00", "4" => "R/C Plane, $400.00", "5" => "R/C Excavator, $150.00", "6" => "R/C Drone, $900.00", "7" => "R/C Tank, $160.00", "8" => "R/C Submarine, $400.00"];

	 foreach ($_SESSION['cart']['id'] as $itemNumber => $value) {
	 	echo "Id=" . $itemNumber . ", Value=" . $value;
	 	echo "<br>";
	 }





	var_dump($_SESSION['cart']);



	// $idAssoc = [1 => "R/C Truck, $200.00", 2 => "White R/C Truck $200.00", 3 => "R/C Boat, $150.00", 4 => "R/C Plane, $400.00", 5 => "R/C Excavator, $150.00", 6 => "R/C Drone, $900.00", 7 => "R/C Tank, $160.00", 8 => "R/C Submarine, $400.00"];

	

	//$_SESSION['name'] = $_POST['name'];
	//$_SESSION['price'] = $_POST['price'];

	echo "it worked i made it"; //. $_SESSION["name"];
?>