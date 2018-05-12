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
          echo "<button class=\"btn btn-primary btn-sm buttonCSS\" onclick=\"removeFromCart('".$id."')\">Remove From Cart</button> ";
          echo "<span class=\"text\">{$idAssoc[$id]['name']}  \${$idAssoc[$id]['price']}.00</span><br>";

        }
        
        ?>
	  
   
	 </div>
  </div>
</body>
</html>
