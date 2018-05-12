<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Shopping Cart </title>
  <?php 
  include('header.php'); 
  include('assocArray.php');
  ?>
  <div class="screen"> 
  	

	<?php
  		//wrap in html tags 
    	foreach ($_SESSION['cart'] as $itemNumber => $value) {
	 		echo "Id=" . $itemNumber . ", Value=" . $idAssoc[$value];
	 		echo "<br>";
	 	
		}
	?>  

	
  </div>
</body>
</html>