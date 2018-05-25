<?php
  session_start();
  $_SESSION["user"] = $_POST["uname"];

  include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>  </title>
  <?php include('headerA.php'); ?>

  <div class="test"> 
	<h3>Hello </h3>
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