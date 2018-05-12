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
  	<div align="center" class="shopCart">

	<?php
  		//wrap in html tags 
    	foreach ($_SESSION['cart'] as $itemNumber => $value) {
	 		echo "Id=" . $itemNumber . ", Value=" . $idAssoc[$value];
	 		echo "<br>";
	 	
		}
	?>  

	</div>
  </div>
</body>
</html>