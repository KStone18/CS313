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

      foreach ($_SESSION['cart'] as $id) {
         
         echo "<span><button onclick=\"removeFromCart('".$id."')\">Delete</button><";
         echo "\t $idAssoc[$id]['name']";
         echo "\t $idAssoc[$id]['price']";
         echo "</span>";
        }


      <!-- <table> -->
	       <!-- <?php

        // foreach ($_SESSION['cart'] as $id) {
        //  echo "<tr>";
        //  echo "<td><button onclick=\"removeFromCart('".$id."')\">Delete</button></td>";
        //  echo "<td class=".">".$idAssoc[$id]['name']."</td>";
        //  echo "<td align=\"right\"> \$".$idAssoc[$id]['price']."</td>";
        //  echo "</tr>";
        // }
    //$totalPrice += $services[$id]["price"];
	   ?> -->
    <!-- </table> -->
	 </div>
  </div>
</body>
</html>
