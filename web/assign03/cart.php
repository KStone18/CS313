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
      
	       <?php

         foreach ($_SESSION['cart'] as $id) {
          echo "<button class=\"btn btn-primary btn-lg buttonCSS\" onclick=\"removeFromCart('".$id."')\">Delete</button> ";
          echo $idAssoc[$id]['name'] . " " . $idAssoc[$id]['price'] . "<br>";

        }
        
        ?>
	  
   
	 </div>
  </div>
</body>
</html>
