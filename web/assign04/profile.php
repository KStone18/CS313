<?php
  session_start();
  include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> <?php ($db->query('SELECT username FROM app_user') as $name); echo "$name \'s Profile"; </title>
  <?php include('headerA.php'); ?>

  <div class="test"> 
	<?php 
	$db->query('SELECT username FROM app_user') as $name; 
	echo "$name" . "\'s Profile";
	?>
  </div>


  <form action="" class="pForm">
 	<input type="text" value="john"/>
 	<input type="text" value="john"/>
 	<input type="text" value="john"/>
 	<input type="text" value="john"/>
 	<input type="text" value="john"/>
 	<input type="text" value="john"/>
  </form>

  


</body>
</html>