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
         $totalPrice = 0;
         foreach ($_SESSION['cart'] as $id) {
          echo "<span class=\"text\">{$idAssoc[$id]['name']}     <span class=\"textPrice\">\${$idAssoc[$id]['price']}.00</span></span><br>";
          $totalPrice += $idAssoc[$id]["price"];
        }
        ?>


     <div class="checkoutBtn">
       <?php echo "<span class=\"textTotal\">Total: \$$totalPrice.00</span><br>"; ?>
     </div> 

  
	 </div>
  </div>
</body>
</html>