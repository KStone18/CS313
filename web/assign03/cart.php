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

        foreach ($_SESSION['cart'] as $id) {
         echo "<tr>";
         echo "<td><button onclick=\"removeFromCart('".$id."')\">Delete</button></td>";
         echo "<td>".$idAssoc[$id]['name']."</td>";
         echo "<td><pre> </pre>\$".$idAssoc[$id]['price']."</td>";
         echo "</tr>";
        }
        //$totalPrice += $services[$id]["price"];
        ?>
	  
    </table> 
	 </div>
  </div>
</body>
</html>
