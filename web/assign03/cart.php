<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Shopping Cart </title>
  <?php
  include('header.php');
  include('assocArray.php');
  ?>
  <div class="screen">
  	<div  class="shopCart">
      <table>
	       <?php
         echo "<button onclick=\"removeFromCart('".$id."')\">Delete</button>"
        
        ?>
	  
    </table> 
	 </div>
  </div>
</body>
</html>
