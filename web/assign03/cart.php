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
  // 		//wrap in html tags
  //   	foreach ($_SESSION['cart'] as $id) {
	 // 		echo "Id=" . $id . ", Value=" . $idAssoc[$id]["name"] . $idAssoc[$id]["price"];
	 // 		echo "<br>";

		// }

        foreach ($_SESSION['cart'] as $id) {
         echo "<tr>";
         echo "<td><button onclick=\"removeFromCart(".$id.")\">Delete</button></td>";
         echo "<td class='descript'>".$services[$id]['name']."</td>";
         echo "<td>\$".$services[$id]['price']."</td>";
         echo "</tr>";
        };
    //$totalPrice += $services[$id]["price"];
	   ?>
    </table>
	 </div>
  </div>
</body>
</html>
