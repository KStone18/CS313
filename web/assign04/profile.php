<?php
  session_start();
  include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> </title>
  <?php include('headerA.php'); ?>

  <div class="test"> 
	<?php 
	$db->query('SELECT username FROM app_user') as $name; 
	echo "$name"."\'s Profile";
	?>
  </div>


  <form action="" class="pForm">
 	
  </form>

  


</body>
</html>